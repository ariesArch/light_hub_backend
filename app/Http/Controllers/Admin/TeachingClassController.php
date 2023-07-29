<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeachingClass;
use Illuminate\Http\Request;

class TeachingClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('teaching_classes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teaching_classes.create');
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeachingClass $teachingClass)
    {
        return view('teaching_classes.edit', compact('teachingClass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
