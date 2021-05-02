<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Microchip extends Model
{
   protected $fillable = [
       'user_id',
       'microchip',
       'active',
   ];
   
   use SoftDeletes;

   protected $dates = ['deleted_at'];
}
