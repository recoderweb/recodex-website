<?php

namespace App\Http\Controllers;

use App\Models\FaqModel;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('faq');
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
    public function show(FaqModel $faqModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FaqModel $faqModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FaqModel $faqModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FaqModel $faqModel)
    {
        //
    }
}
