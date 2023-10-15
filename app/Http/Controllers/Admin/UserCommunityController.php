<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserCommunity;
use Illuminate\Http\Request;

class UserCommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user_communities.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_communities.create');
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
    public function edit(UserCommunity $userCommunity)
    {
        return view('user_communities.edit',compact('userCommunity'));
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
