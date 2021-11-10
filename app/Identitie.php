<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identitie extends Model
{
    //
     protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'phoneNumber',
        'adresse',
        'twitter',
        'linkedin',
        'facebook',
        'instagram',
        'skype'
    ];
}