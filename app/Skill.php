<?php

namespace App;
use App\Type;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name','level','type_id'];
  
  public function type(){
    return $this->belongsTo(Type::class);
}
}