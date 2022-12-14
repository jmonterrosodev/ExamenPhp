<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ingredient extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombreIngredient',
        'descIngredient',
        'fechaIngreso', 
        'fechaVence'
    ];
     
    protected $dates = ['fechaVence','fechaIngreso'];
    
}
