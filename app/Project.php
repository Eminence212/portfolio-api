<?php

namespace App;
use App\Domain;
use App\Technologie;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
     protected $fillable = ['title','resume','picture','domain_id'];
    // Asociations 
  public function domain(){
    return $this->belongsTo(Domain::class);
  }
   public function technologies(){
    return $this->belongsToMany(Technologie::class)->withTimestamps();
  }
}