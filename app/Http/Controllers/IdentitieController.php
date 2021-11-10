<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Identitie;
use App\Http\Resources\IdentitieResource;


class IdentitieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $identities = Identitie::all();
        return new IdentitieResource($identities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Create a new identities
        $identitie = new Identitie();
        $identitie->firstName = $request->input('firstName');
        $identitie->lastName = $request->input('lastName');
        $identitie->email = $request->input('email');
        $identitie->phoneNumber = $request->input('phoneNumber');
        $identitie->adresse = $request->input('adresse');
        $identitie->twitter = $request->input('twitter');
        $identitie->linkedin = $request->input('linkedin');
        $identitie->facebook = $request->input('facebook');
        $identitie->instagram = $request->input('instagram');
        $identitie->skype = $request->input('skype');
        $identitie->save();
        return new IdentitieResource($identitie);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $identitie = Identitie::findOrFail($id);
        return new IdentitieResource($identitie);
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
        //
        $identitie = Identitie::findOrFail($id);
        $identitie->firstName = $request->input('firstName');
        $identitie->lastName = $request->input('lastName');
        $identitie->email = $request->input('email');
        $identitie->phoneNumber = $request->input('phoneNumber');
        $identitie->adresse = $request->input('adresse');
        $identitie->twitter = $request->input('twitter');
        $identitie->linkedin = $request->input('linkedin');
        $identitie->facebook = $request->input('facebook');
        $identitie->instagram = $request->input('instagram');
        $identitie->skype = $request->input('skype');
        $identitie->save();
        return new IdentitieResource($identitie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $identitie = Identitie::findOrFail($id);
        if($identitie->delete()){
            return new IdentitieResource($identitie);
        }
    }
}
