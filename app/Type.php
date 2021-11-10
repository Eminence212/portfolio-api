<?php

namespace App;
use App\Skill;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
      protected $fillable = ['libelle'];
      
      // Asociations 
  public function skills(){
    return $this->hasMany(Skill::class);
  }
}