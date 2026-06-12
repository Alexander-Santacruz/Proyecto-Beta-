<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    //

    public function consulta(){

        $categories = Category::with(['posts.user'])->get();

        return $categories;
    }
}
