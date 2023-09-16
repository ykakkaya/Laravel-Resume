<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $edu = Education::get();
        return view('admin.Education.index',compact('edu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.Education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Education::create($request->all());
        return redirect()->route('education.index');
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
        $edu = Education::findorfail($id);
        return view('admin.Education.update', compact('edu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $edu = Education::findorfail($id);
        $edu->update($request->all());
        return redirect()->route('education.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $edu = Education::findorfail($id);
        $edu->delete();
        return redirect()->route('education.index');


    }
}
