<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Projects;
use App\Models\Galleries;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index',[
            'title' => 'Dashboard',
            'projects' => Projects::all(),
            'members' => Members::all(),
            'galleries' => Galleries::all(),
            'user' => User::all()
        ]);
    }
}
