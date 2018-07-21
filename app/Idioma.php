<?php
namespace App;
use Illuminate\Database\Eloquent\Model;


class Idioma extends Model
{
   protected $table = "idiomas";
   public $primaryKey = "id";
   protected $fillable = [
    'idioma',
    'siglas'
    ];
    public $timestamps = false;
}