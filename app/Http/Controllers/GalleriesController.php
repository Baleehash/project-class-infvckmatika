<?php

namespace App\Http\Controllers;
use App\Models\galleries;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function index()
    {
        return view('gallery',[
            'title' => 'Gallery',
            'galleries' => Galleries::all()
        ]);
    }
}
