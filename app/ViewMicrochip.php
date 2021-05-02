<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewMicrochip extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'id',
        'user_id',
        'microchip',
        'active',
        'created_at'
    ];

    public function scopeData($query)
    {
        return $query->get();
    }
}
