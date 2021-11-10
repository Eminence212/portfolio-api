<?php

namespace App;
use App\Project;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
     protected $fillable = ['name'];
           // Asociations 
  public function projects(){
    return $this->hasMany(Project::class);
  }
}