<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = 'album';
    protected $primaryKey = 'album_id';
    #public $timestamps 

	public function usuario()
	{
    	// Un album pertenece a un usuario
    	return $this->belongsTo(User::class);
	}

	public function fotos(){
    	// Un album tiene muchas fotos
    	return $this->hasMany(Foto::class);
	}

}
