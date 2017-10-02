<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
  protected $fillable  = [
'name', 'email', 'comment'
    ];

 public function setNameAttribute($value){

   $this->attributes['name'] = ucfirst($value);

 }   

}
