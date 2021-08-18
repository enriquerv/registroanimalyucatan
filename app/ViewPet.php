<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewPet extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'microchip_id',
	    'pet_name',
	    'birthdate',
	    'gender',
	    'species_id',
	    'breed_id',
	    'color',
	    'traits',
	    'is_sterilized',
	    'vaccine_polivalente',
	    'vaccine_triple',
	    'vaccine_rabies',
	    'vaccine_leptospira',
	    'deworming',
	    'photo_face',
	    'photo_body',
	    'allergies',
	    'previous_illnesses',
	    'surgeries',
	    'user_id',
	    'owner_id',
    ];

    public function scopeData($query)
    {
        return $query->get();
    }
}
