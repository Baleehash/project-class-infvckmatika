<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Projects;
use App\Models\Galleries;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home',[
            'title' => 'Home',
            'homes' => Home::all(),
            'projects' => Projects::all()->take(3),
            'galleries' => Galleries::all()->take(4)
        ]);
    }
}
