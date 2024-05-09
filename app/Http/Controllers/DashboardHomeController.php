<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('dashboard.home.index',[
            'homes' => Home::where('id', auth()->user()->id)->latest()->get(),
            'title' => 'Home Dashboard'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        
        return view ('dashboard.home.show',[
            'homes' => Home::all(),
            'title' => 'Home Dashboard'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        return view('dashboard.home.edit',[
            'home' => $home,
            'title' => 'Edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {


        $rules = [
            'hero_image' => 'image|file|max:1024',
            'hero_title' => 'required',
            'hero_text' => 'required',
            'about_image' => 'image|file|max:1024',
            'about_title' => 'required',
            'about_text' => 'required',
        ];

        $validatedData = $request->validate($rules);

        
        if($request->file('hero_image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['hero_image'] = $request->file('hero_image')->store('home-images-hero');
        }
        
        if($request->file('about_image')){
            if($request->oldImageAbout){
                Storage::delete($request->oldImageAbout);
            }
            $validatedData['about_image'] = $request->file('about_image')->store('home-images-about');
        }

        Home::where('id',$home->id)->update($validatedData);

        return redirect('/dashboard/home')->with('success','Bagian Home sudah di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {

        if($home->hero_image){
            Storage::delete($home->hero_image);
        }

        Home::destroy($home->id);
        
        return redirect('/dashboard/home')->with('success', 'Bagian rumah sudah di hapus');
    }
}
