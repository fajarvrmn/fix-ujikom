<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
  protected $fillable = [
      'foto', 'judul' , 'isi'];
}
