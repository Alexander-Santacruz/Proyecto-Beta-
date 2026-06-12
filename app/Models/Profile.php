<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    //creo una funcion que apunte al modelo user,pero su nombre lo define la cardilalidad
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
