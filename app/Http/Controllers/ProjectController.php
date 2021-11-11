<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $projects = Project::with(['domain','technologies'])->get();
        return new ProjectResource($projects);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
     
        $project = new Project();
        $project->title = $request->input('title');
        $project->resume = $request->input('resume');
        $project->picture = $request->input('picture');
        $project->domain_id = $request->input('domain_id');
        $is_saved = $project->save();
        // Attacher les technologies 
        if($is_saved){
             $project = Project::all()->last()->load('domain','technologies');
             $project->technologies()->sync($request->input('technologies'));
             return  $project ;
        }else{
            return "Echec d'enregistrement";
        }
        } catch (\Throwable $th) {
          return  $th;
        }
     
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return new ProjectResource($project->load('domain','technologies'));
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
      
        try {
        $project =Project::findOrFail($id);
        $project->title = $request->input('title');
        $project->resume = $request->input('resume');
        $project->picture = $request->input('picture');
        $project->domain_id = $request->input('domain_id');
        $is_saved = $project->save();
        // Attacher les technologies 
        if($is_saved){
             $project->technologies()->sync($request->input('technologies'));
             return  $project->load('domain','technologies') ;
        }else{
            return "Echec lors de la mise à jour !";
        }
        } catch (\Throwable $th) {
          return  $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $project = Project::findOrFail($id);
        if($project->delete()){
          return new ProjectResource($project->load('domain','technologies'));
        }  
    }

}