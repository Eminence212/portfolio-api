<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opinion;
use App\Http\Resources\OpinionResource;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $opinions = Opinion::all();
        return new OpinionResource($opinions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opinion = new Opinion();
        $opinion->name = $request->input('name');
        $opinion->email= $request->input('email');
        $opinion->message= $request->input('message');
        $opinion->save();
        return new OpinionResource($opinion);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $opinion = Opinion::findOrFail($id);
        return new OpinionResource($opinion);
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
        $opinion =  Opinion::findOrFail($id);
        $opinion->name = $request->input('name');
        $opinion->email= $request->input('email');
        $opinion->message= $request->input('message');
        $opinion->save();
        return new OpinionResource($opinion);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opinion = Opinion::findOrFail($id);
        if($opinion->delete()){
            return new OpinionResource($opinion);
        }
    }
}