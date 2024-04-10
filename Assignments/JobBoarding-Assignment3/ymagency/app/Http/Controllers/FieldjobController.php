<?php

namespace App\Http\Controllers;

use App\Models\fieldjob;
use App\Http\Requests\StorefieldjobRequest;
use App\Http\Requests\UpdatefieldjobRequest;

class FieldjobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Fieldjob::all();

        // Pass fieldjobs data to the welcome view
        return view('fieldjobs.index', ['jobs' => $jobs]);
        //
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
    public function store(StorefieldjobRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(fieldjob $fieldjob)
    {
        return view('fieldjob.show',compact('fieldjob'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fieldjob $fieldjob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefieldjobRequest $request, fieldjob $fieldjob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fieldjob $fieldjob)
    {
        //
    }
}
