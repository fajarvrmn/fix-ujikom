<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detaill extends Model
{
	protected $table = 'detaills';
   protected $fillable = [
        'keadaan','transmisi','bahanbkr','thnklr','harga','desk','mobils_id'];

        public function mobils(){

	return $this->belongsTo('App\Mobil', 'mobils_id');
}
}
