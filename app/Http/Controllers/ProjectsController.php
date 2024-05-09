<?php

namespace App\Http\Controllers;
use App\Models\Projects;


use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('projects',[
            'title' => 'Projects',
            'projects' => Projects::all()
        ]);
    }
}
