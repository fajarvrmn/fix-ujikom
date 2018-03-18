<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobils';
	protected $fillable = [
        'nama','merk','tipe','foto', 'merekks_id'];

    public function merekks(){

		return $this->belongsTo('App\Merekk', 'merekks_id');
	}
}
