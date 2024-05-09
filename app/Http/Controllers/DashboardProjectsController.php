<?php

namespace App\Http\Controllers;

use App\Models\Members;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // fungsi ini akan di kirim ke dashboard.projects.index
        return view('dashboard.projects.index',[
            // isi dari projects dan members adalah model projects dan model members yang bersumber dari database yang nanti akan di looping di view dashboard.projects.index
            'projects' => Projects::all(),  
            'members' => Members::all(),
            'title' => 'Dashboard Projects'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.create',[
            'projects' => Projects::all(),
            'members' => Members::all(),
            'title' => 'Dashboard Projects'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi data yang dikirim oleh user dengan rules yang dibuat 
        $validatedData = $request->validate([
            'image' => 'image|file|max:1024',
            'projectName' => 'required',
            'member_id' => 'required',
            // 'member' => 'required',
            'link' => 'required'
        ]);
        
        // jika ada gambar yang dikirimkan oleh user maka akan di simpan ke storage 
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('projects-images');
        }

        // simpan data ke database
        $validatedData['id'] = auth()->user()->id;

        Projects::create($validatedData);
        
        // redirect ke halaman projects dengan pesan success
        return redirect('/dashboard/projects')->with('success', 'Member baru berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projects $project)
    {
        return view('dashboard.projects.show',[
            'project' => $project,
            'title' => 'Dashboard Project'

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projects $project)
    {
        return view('dashboard.projects.edit',[
            'project' => $project,
            'projects' => Projects::all(),
            'members' => Members::all(),
            'title' => 'Dashboard Project'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projects $project)
    {
        $rules = [
            'image' => 'image|file|max:1024',
            'projectName' => 'required',
            'member_id' => 'required',
            // 'member' => 'required',
            'link' => 'required'
        ];

        $validatedData =  $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('projects-images');
        }

        Projects::where('id', $project->id)->update($validatedData);

        return redirect('/dashboard/projects')->with('success','Project telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projects $project)
    {
        // jika ada gambar yang dikirimkan oleh user maka akan di hapus dari storage
        if($project->image) {
            Storage::delete($project->image);
        }
        // menghapus data dari database
        Projects::destroy($project->id);
        
        // redirect ke halaman projects dengan pesan success
        return redirect('/dashboard/projects')->with('success', 'Project berhasil di hapus');
    
    }
}
