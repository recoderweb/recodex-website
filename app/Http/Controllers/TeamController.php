<?php

namespace App\Http\Controllers;

use App\Models\TeamModel;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('team');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(TeamModel $teamModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeamModel $teamModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamModel $teamModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamModel $teamModel)
    {
        //
    }
}
