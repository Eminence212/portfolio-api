<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technologie extends Model
{
protected $fillable = ['name'];
           // Asociations 
  public function projects(){
    return $this->belongsToMany(Project::class);
  }
}