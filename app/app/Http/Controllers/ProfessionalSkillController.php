<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfessionalSkillRequest;
use App\Http\Requests\UpdateProfessionalSkillRequest;
use App\Models\ProfessionalSkill;

class ProfessionalSkillController extends Controller
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
     * @param  \App\Http\Requests\StoreProfessionalSkillRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfessionalSkillRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfessionalSkill  $professionalSkill
     * @return \Illuminate\Http\Response
     */
    public function show(ProfessionalSkill $professionalSkill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfessionalSkill  $professionalSkill
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfessionalSkill $professionalSkill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfessionalSkillRequest  $request
     * @param  \App\Models\ProfessionalSkill  $professionalSkill
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfessionalSkillRequest $request, ProfessionalSkill $professionalSkill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfessionalSkill  $professionalSkill
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfessionalSkill $professionalSkill)
    {
        //
    }
}
