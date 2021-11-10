<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
use App\Http\Resources\TypeResource;


class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          //
        $types = Type::all();
        return new TypeResource($types);
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
        $type = new Type();
        $type->libelle = $request->input('libelle');
        $type->save();
        return new TypeResource($type);
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
        $type = Type::findOrFail($id);
        return new TypeResource($type);
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
        $type =Type::findOrFail($id);
        $type->libelle = $request->input('libelle');
        $type->save();
        return new TypeResource($type);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
    $type = Type::findOrFail($id);
    if($type->delete()){
      return new TypeResource($type);
    }       
    }
}