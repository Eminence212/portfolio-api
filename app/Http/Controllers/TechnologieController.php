<?php

namespace App\Http\Controllers;

use App\Http\Resources\TechnologieResource;
use App\Technologie;
use Illuminate\Http\Request;

class TechnologieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technologies = Technologie::with('projects')->get();
        return new TechnologieResource($technologies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $technologie = new Technologie();
        $technologie->name = $request->input('name');
        $technologie->save();
        return new TechnologieResource($technologie->load('projects'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $technologie = Technologie::findOrFail($id);
        return new TechnologieResource($technologie->load('projects'));
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
        $technologie = Technologie::findOrFail($id);
        $technologie->name = $request->input('name');
        $technologie->save();
        return new TechnologieResource($technologie->load('projects'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $technologie = Technologie::findOrFail($id);
        if($technologie->delete()){
          return new TechnologieResource($technologie->load('projects'));
        }  
    }
}