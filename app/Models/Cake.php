<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombrePastel',
        'descPastel', 
        'creadorPastel', 
        'fechaCreado', 
        'fechaVence'
    ];
     
    protected $dates = ['fechaVence','fechaCreado'];

}
