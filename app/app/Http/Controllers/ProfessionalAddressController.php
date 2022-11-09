<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfessionalAddressRequest;
use App\Http\Requests\UpdateProfessionalAddressRequest;
use App\Models\ProfessionalAddress;

class ProfessionalAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProfessionalAddressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfessionalAddressRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfessionalAddress  $professionalAddress
     * @return \Illuminate\Http\Response
     */
    public function show(ProfessionalAddress $professionalAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfessionalAddress  $professionalAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfessionalAddress $professionalAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfessionalAddressRequest  $request
     * @param  \App\Models\ProfessionalAddress  $professionalAddress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfessionalAddressRequest $request, ProfessionalAddress $professionalAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfessionalAddress  $professionalAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfessionalAddress $professionalAddress)
    {
        //
    }
}
