<?php

namespace App\Http\Controllers;

use App\Domain;
use App\Http\Resources\DomainResource;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $domains = Domain::with('projects')->get();
        return new DomainResource($domains);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $domain = new Domain();
        $domain->name = $request->input('name');
        $domain->save();
        return new DomainResource($domain->load('projects'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $domain = Domain::findOrFail($id);
        return new DomainResource($domain->load('projects'));
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
        $domain =Domain::findOrFail($id);
        $domain->name = $request->input('name');
        $domain->save();
        return new DomainResource($domain->load('projects'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $domain = Domain::findOrFail($id);
        if($domain->delete()){
          return new DomainResource($domain->load('projects'));
        }  
    }
}