<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $table = 'foto';
    protected $primaryKey = 'foto_id';

    public function album()
	{
    	// Una foto pertenece a un album
    	return $this->belongsTo(Album::class);
	}

}
