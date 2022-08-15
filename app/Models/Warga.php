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
		return $this->hasMany('App\Models\Alternatif', 'id_warga');
	}

    public function normalisasi() 
	{
		return $this->hasMany('App\Models\Normalisasi', 'id_warga');
	}
}
