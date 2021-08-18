<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'birthdate',
        'phone',
        'country_id',
        'state_id',
        'city_id',
        'municipality',
        'colony',
        'street',
        'no_ext',
        'no_int',
        'postal_code',
        'rfc',
        'role_id',
        'last_login',
        'second_last_name',
        'curp',
        'social_media',
        'cellphone',
        'certificate_folio',
        'second_owner_first_name',
        'second_owner_last_name',
        'second_owner_phone',
        'second_owner_cellphone',
        'second_owner_email',
        'second_owner_social_media',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
    * To allow soft deletes
    */
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function setPasswordAttribute($valor){
        if(!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
        }
    }

    public function contact(){
        return $this->hasMany(SupplierContact::class);
    }
}
