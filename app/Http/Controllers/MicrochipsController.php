<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str as Str;
use App\Microchip as MasterModel;
use App\ViewMicrochip as MasterViewModel;
use Sentinel;
use Activation;
use Redirect;
  
use App\User;

use Illuminate\Support\Facades\DB;

class MicrochipsController extends Controller
{
    
    public function __construct() {
        $this->active = "microchips";
        $this->model = "Microchip";
        $this->select = [
            'id',
            'user_name',
            'microchip',
            'created_at'
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
            trans('validation.attributes.user_id'),
            trans('validation.attributes.microchip'),
            trans('validation.attributes.created_at'),
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
        	$actions = 5;	

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

        return view('admin.create', compact($this->compact, 'users'));
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
      	$microchip = MasterModel::where('microchip', $request->microchip);
      	if($microchip->count()){
      		return Redirect::back()->with('error', "El microchip que intentas registrar ya existe, favor de corroborarlo");
      	}

    		$item = MasterModel::create([
    			'microchip' => $request->microchip,
    			'user_id' => $request->user_id,
    			'active' => 1
    		]);	
        $message = "Microchip registrado con éxito";
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

        $active = $this->active;
        $word = trans('module_'.$this->active.'.module_title');

        return view('admin.show', compact($this->compact, 'item'));
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

        return view('admin.edit', compact($this->compact, 'item', 'users'));
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

        $microchip = MasterModel::where('microchip', $request->microchip);
        if($microchip->count()){
          return Redirect::back()->with('error', "El microchip que intentas editar ya existe, favor de corroborarlo");
        }

        $item = MasterModel::find($id);
        $item->fill([
        	'microchip' => $request->microchip,
        	'user_id' => $request->user_id,
        ]);
        if($item->save()){
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
}
