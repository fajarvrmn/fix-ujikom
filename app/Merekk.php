<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merekk extends Model
{
   protected $fillable = [
       'namamerek'];

    public function mobil(){

		return $this->HasMany('App\Mobil');
	}
}
