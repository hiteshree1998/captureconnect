<?php

namespace App\Model;

use App\Model\Studio;
use Illuminate\Database\Eloquent\Model;

class Capturer extends Model
{
   protected $fillable = ['email','password','name','mobileno','pro_pic','studio','studio_address','category','experience','rating','status'];

   public function studio()
   {
   		return $this->hasMany(Studio::class,'owner_id');
   }
   public function studio_name()
   {
   		return $this->studio['studio_name'];
   }
}
