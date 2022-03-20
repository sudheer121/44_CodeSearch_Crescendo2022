<?php

namespace App\Http\Controllers;

use App\Models\PetProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PetProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): Collection
    {
        return PetProfile::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PetProfile  $petProfile
     * @return \Illuminate\Http\Response
     */
    public function show(string $id): PetProfile
    {
        return PetProfile::query()->with(['organization', 'posts'])->find((int)$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PetProfile  $petProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(PetProfile $petProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PetProfile  $petProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PetProfile $petProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PetProfile  $petProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(PetProfile $petProfile)
    {
        //
    }
}
