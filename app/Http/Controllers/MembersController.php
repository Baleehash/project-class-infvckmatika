<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Routing\Controller;

class MembersController extends Controller
{
    public function index()
    {
        return view('members',[
            "title" => "Members",
            "members" => Members::all()
        ]);
    }
}
