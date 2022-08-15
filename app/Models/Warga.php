<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function alternatif() 
	{
		return $this->hasOne('App\Models\Alternatif', 'id_warga');
	}
}
