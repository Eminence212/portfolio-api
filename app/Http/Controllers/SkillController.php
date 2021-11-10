<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $skills = Skill::all();
        return new SkillResource($skills);
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
        $skill = new Skill();
        $skill->name = $request->input('name');
        $skill->level = $request->input('level');
        $skill->type_id = $request->input('type_id');
        $skill->save();
        return new SkillResource($skill);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
        $skill = Skill::findOrFail($id);
        return new SkillResource($skill);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $skill = Skill::findOrFail($id);
        $skill->name = $request->input('name');
        $skill->level = $request->input('level');
        $skill->type_id = $request->input('type_id');
        $skill->save();
        return new SkillResource($skill);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        if($skill->delete()){
        return new SkillResource($skill);
        }       
        
    }
}