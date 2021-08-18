<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str as Str;
use App\Pet as MasterModel;
use App\ViewPet as MasterViewModel;
use App\ViewUser;
use Sentinel;
use Activation;
use Redirect;
  
use App\User;
use App\Microchip;
use App\Species;
use App\Breed;
use App\State;
use App\City;

use Illuminate\Support\Facades\DB;

class PetsController extends Controller
{
    
    
    public function __construct() {
        $this->active = "pets";
        $this->model = "Pet";
        $this->select = [
            'id',
            'pet_name',
            'user_name',
            'owner_id',
            'microchip_id',
        ];
        // 1 = all
        // 2 = only
        // 3 = exeptions
        $this->request_whit = 3;
        $this->only = [
        ];
        $this->exeptions = [
            'password_confirm'
        ];
        $this->compact = ['word', 'active', 'model', 'view', 'columns', 'select', 'actions', 'word1'];

        //Catalogs
        $this->catalog_role_id = DB::table('roles')->where('id', '<=', 3)->pluck('name', 'id');
    }

    public function columns()
    {
        $columns = [
            trans('validation.attributes.id'),
            'Mascota',
            trans('validation.attributes.user_id'),
            trans('validation.attributes.owner_id'),
            trans('validation.attributes.microchip'),
            trans('validation.attributes.actions'),
        ];

        return $columns;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $word = "";
        $word1 = "";
        $active = "";
        $model = "";
        $view = "";
        $columns = "";
        $select = "";
        $actions = "";
        $active = $this->active;
        $model = $this->model;
        $view = 'index';
        $word = trans('module_'.$this->active.'.module_title');
        $columns = $this->columns();
        $select = $this->select;
        // 1 = (show, edit, delete)
        // 2 = (show, edit)
        // 3 = (show, delete)
        // 4 = (edit, delete)
        // 5 = (show)
        // 6 = (edit)
        // 7 = (delete)
        $user = Sentinel::getUser();  
        if($user->role_id == 1)
        	$actions = 1;
        else
        	$actions = 2;	

        return view('admin.index', compact($this->compact));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $word = "";
        $word1 = "";
        $active = "";
        $model = "";
        $view = "";
        $columns = "";
        $select = "";
        $actions = "";
        $active = $this->active;
        $model = $this->model;
        $word = trans('module_'.$this->active.'.module_title');
        $columns = $this->columns();
        $select = $this->select;

        $users = User::all();
        $used_microchips = MasterModel::select('microchip_id')->get();
        $microchips = Microchip::where('user_id', Sentinel::getUser()->id)->whereNotIn('id', $used_microchips)->get();
        $species = Species::all();
        $states = State::all();
        $cities = City::orderByRaw('FIELD(name, "merida") DESC')->get();
        $edit = false;

        return view('admin.create', compact($this->compact, 'users', 'microchips', 'species', 'states', 'cities', 'edit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());   

        $password = 'no fue nuevo';

        if(is_null($request->user_id)){
            $password = $this->getPassword();
            $create_user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'second_last_name' => $request->second_last_name,
                'email' => $request->email,
                'password' => $request->password,
                'birthdate' => $request->birthdate_user,
                'phone' => $request->phone,
                'cellphone' => $request->cellphone,
                'country_id' => $request->country_id,
                'state_id' => $request->state_id,
                'city_id' => $request->city_id,
                'municipality' => $request->municipality,
                'colony' => $request->colony,
                'street' => $request->street,
                'no_ext' => $request->no_ext,
                'no_int' => $request->no_int,
                'postal_code' => $request->postal_code,
                'rfc' => $request->rfc,
                'curp' => $request->curp,
                'certificate_folio' => $request->certificate_folio,
                'second_owner_first_name' => $request->second_owner_first_name,
                'second_owner_last_name' => $request->second_owner_last_name,
                'second_owner_phone' => $request->second_owner_phone,
                'second_owner_cellphone' => $request->second_owner_cellphone,
                'second_owner_email' => $request->second_owner_email,
                'second_owner_social_media' => $request->second_owner_social_media,
                'social_media' => $request->social_media,
                'password' => $password,
                'role_id' => 3,
            ]);
            $user_id = $create_user->id;

            $user = Sentinel::findById($create_user->id);
            $activation = Activation::create($user);
            Activation::complete($user, $activation->code);

            /* Extras */
            $role = Sentinel::findRoleById(3);
            $role->users()->attach($create_user);
        }
        else{
            $user_id = $request->user_id;
        }

		$item = MasterModel::create([
			'microchip_id' => $request->microchip_id,
            'pet_name' => $request->pet_name,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'species_id' => $request->species_id,
            'breed_id' => $request->breed_id,
            'color' => $request->color,
            'traits' => $request->traits,
            'is_sterilized' => $request->is_sterilized,
            'vaccine_polivalente' => $request->vaccine_polivalente,
            'vaccine_triple' => $request->vaccine_triple,
            'vaccine_rabies' => $request->vaccine_rabies,
            'vaccine_leptospira' => $request->vaccine_leptospira,
            'deworming' => $request->deworming,
            'allergies' => $request->allergies_text,
            'previous_illnesses' => $request->previous_illnesses_text,
            'surgeries' => $request->surgeries_text,
            'user_id' => Sentinel::getUser()->id,
            'owner_id' => $user_id,
		]);	

        $message = "Mascota registrada con éxito";
        if($item->save()){
            return Redirect::route($this->active)->with('success', $message);
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.create.error'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $word = "";
        $word1 = "";
        $active = "";
        $model = "";
        $view = "";
        $columns = "";
        $select = "";
        $actions = "";
        $item = MasterViewModel::find($id);
        $user = ViewUser::find($item->owner_id);

        $active = $this->active;
        $word = trans('module_'.$this->active.'.module_title');

        return view('admin.show', compact($this->compact, 'item', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $word = "";
        $word1 = "";
        $active = "";
        $model = "";
        $view = "";
        $columns = "";
        $select = "";
        $actions = "";
        $item = MasterModel::find($id);

        $active = $this->active;
        $model = $this->model;
        $word = trans('module_'.$this->active.'.module_title');
        $columns = $this->columns();
        $select = $this->select;

        $users = User::all();
        $used_microchips = MasterModel::select('microchip_id')->get();
        $microchips = Microchip::where('user_id', Sentinel::getUser()->id)->whereNotIn('id', $used_microchips)->orWhere('id', $item->microchip_id)->get();
        $species = Species::all();
        $states = State::all();
        $cities = City::orderByRaw('FIELD(name, "merida") DESC')->get();
        $breeds = Breed::where('species_id', $item->species_id)->get();
        $edit = true;

        return view('admin.edit', compact($this->compact, 'item', 'users', 'microchips', 'species', 'states', 'cities', 'edit', 'breeds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());

        $item = MasterModel::where('id', $id)->update([
            'microchip_id' => $request->microchip_id,
            'pet_name' => $request->pet_name,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'species_id' => $request->species_id,
            'breed_id' => $request->breed_id,
            'color' => $request->color,
            'traits' => $request->traits,
            'is_sterilized' => $request->is_sterilized,
            'vaccine_polivalente' => $request->vaccine_polivalente,
            'vaccine_triple' => $request->vaccine_triple,
            'vaccine_rabies' => $request->vaccine_rabies,
            'vaccine_leptospira' => $request->vaccine_leptospira,
            'deworming' => $request->deworming,
            'allergies' => $request->allergies_text,
            'previous_illnesses' => $request->previous_illnesses_text,
            'surgeries' => $request->surgeries_text,
        ]); 

        if($item){
            return Redirect::route($this->active)->with('success', trans('module_'.$this->active.'.crud.update.success'));
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.update.error'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->id == Sentinel::getUser()->id){
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.delete.error'));
        }

        if(MasterModel::destroy($request->id)){
            return Redirect::route($this->active)->with('success', trans('module_'.$this->active.'.crud.delete.success'));
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.delete.error'));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRestore()
    {
        $word = "";
        $word1 = "";
        $active = "";
        $model = "";
        $view = "";
        $columns = "";
        $select = "";
        $actions = "";
        $active = $this->active;
        $model = $this->model;
        $view = 'delete';
        $word = trans('module_'.$this->active.'.module_title');
        $columns = $this->columns();
        $select = $this->select;
        $actions = 1;

        return view('admin.deleted', compact($this->compact));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postRestore(Request $request)
    {
        $item = MasterModel::onlyTrashed()->find($request->id);

        if($item->restore()){
            return Redirect::route($this->active.'.deleted')->with('success', trans('module_'.$this->active.'.crud.restore.success'));
        }else{
            return Redirect::back()->with('error', trans('module_'.$this->active.'.crud.restore.error'));
        }
    }

    public function getBreeds($species_id)
    {
    	return Breed::where('species_id', $species_id)->get();
    }

    public function getCities($state_id)
    {
        return City::orderByRaw('FIELD(name, "merida") DESC')->get();
    }

    public function getPassword()
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited

        for ($i=0; $i < 8; $i++) {
            $token .= $codeAlphabet[rand(0, $max-1)];
        }

        return $token;
    }
}
