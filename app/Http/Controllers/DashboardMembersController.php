<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.members.index',[
            'members' => Members::all(),
            'title' => 'Dashboard Member'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.members.create',[
            'members' => Members::all(),
            'title' => 'Dashboard Member'

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:1024',
            'member' => 'required|max:255',
            'nickname' => 'required',
            'quotes' => 'required'
        ]);
        
        if($request->file('image')){
            $validatedData['image'] = $request ->file('image')->store('members-images');
        }

        $validatedData['id'] = auth()->user()->id;

        Members::create($validatedData);
        
        return redirect('/dashboard/members')->with('success', 'Member baru berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Members $member)
    {
        return view('dashboard.members.show',[
            'member' => $member,
            'title' => 'Dashboard Member'

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Members $member)
    {
        return view('dashboard.members.edit',[
            'member' => $member,
            'title' => 'Dashboard Member'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Members $member)
    {
        $rules = [
            'image' => 'image|file|max:1024',
            'member' => 'required|max:255',
            'nickname' => 'required',
            'quotes' => 'required'
        ];

        $validatedData =  $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('members-images');
        }

        Members::where('id', $member->id)->update($validatedData);

        return redirect('/dashboard/members')->with('success','Member telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Members $member)
    {
        if($member->image) {
            Storage::delete($member->image);
        }
        
        Members::destroy($member->id);
        
        return redirect('/dashboard/members')->with('success', 'Member berhasil di hapus');
    }
}
