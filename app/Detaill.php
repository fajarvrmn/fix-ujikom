<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detaill extends Model
{
   protected $fillable = [
        'keadaan','transmisi','bahanbkr','thnklr','harga','desk','mobils_id'];

        public function mobils(){

	return $this->belongsTo('App\Mobil');
}
}
