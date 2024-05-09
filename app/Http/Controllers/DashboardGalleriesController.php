<?php

namespace App\Http\Controllers;

use App\Models\Galleries;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardGalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.galleries.index',[
            'galleries' => Galleries::all(),
            'title' => 'Dashboard Gallery'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.galleries.create',[
            'galleries' => Galleries::all(),
            'title' => 'Dashboard Gallery'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:1024',
            'alt' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('galleries-images');
        }

        Galleries::create($validatedData);

        return redirect('/dashboard/galleries')->with('success','Foto berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galleries $gallery)
    {
        return view('dashboard.galleries.show',[
            'title' => 'Dashboard Gallery',
            'gallery' => $gallery

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galleries $gallery)
    {
        return view('dashboard.galleries.edit',[
            'title' => 'Dashboard Gallery',
            'gallery' => $gallery,
            'galleries' => Galleries::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galleries $gallery)
    {
        $rules = [
            'image' => 'image|file|max:1024',
            'alt' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('galleries-images');
        }

        Galleries::where('id', $gallery->id)->update($validatedData);

        return redirect('/dashboard/galleries')->with('success','Foto-foto di galeri sudag diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galleries $gallery)
    {
        if($gallery->image) {
            Storage::delete($gallery->image);
        }
        
        Galleries::destroy($gallery->id);
        
        return redirect('/dashboard/galleries')->with('success', 'Galleries berhasil di hapus');
    
    }
}
