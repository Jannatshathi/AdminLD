<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryrController extends Controller
{
    public function gallery(){
        return view('pages.gallery');
    }
}
