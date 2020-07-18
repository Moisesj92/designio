<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;

class PhotosController extends Controller
{
    public function store (Post $post){

        return 'Procesando Imagen...';

    }
}
