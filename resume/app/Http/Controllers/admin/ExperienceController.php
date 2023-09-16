<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exp = Experience::get();
        return view('admin.Experience.index', compact('exp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $experience=Experience::create($request->all());
        return redirect()->route('experience.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $exp = Experience::findorfail($id);
        return view('admin.Experience.update', compact('exp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $exp = Experience::findorfail($id);
        $exp->update($request->all());
        return redirect()->route('experience.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exp = Experience::findorfail($id);
        $exp->delete();
        return redirect()->route('experience.index');

    }
}
