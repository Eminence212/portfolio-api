<?php

namespace App\Http\Controllers;

use App\Opinion;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        try {
           
        $opinion = new Opinion();
        $opinion->name = $request->input('name');
        $opinion->email= $request->input('email');
        $opinion->message= $request->input('message');
       $is_saved = $opinion->save();
        if($is_saved){
             $object =  $request->input('object') ?  $request->input('object') : "Mon opinion";
            $mail=['name'=>$opinion->name,'email'=>$opinion->email,'object'=>$object,'message'=>$opinion->message];
            Mail::to('mulemanowa@gmail.com')->send(new SendMail($mail));
        return new OpinionResource($opinion);
        }else{
            return "Echec lors de la mise à jour !";
        }
       
        } catch (\Throwable $th) {
            return $th;
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
    public function sendOpinion(){
        $user = ['name'=>'Kulesha jean','email'=>'kulesha@gmail.com','object'=>'Demande des services','message'=>'Bonjour Ir ! Je voulais savoir si vous serez disponible pour commencer un projet mobile ? Merci'];

       Mail::to('mulemanowa@gmail.com')->send(new SendMail($user));
        return "Email envoyé !";
    }
}