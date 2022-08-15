<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function subKriteria()
    {
        return $this->hasMany('App\Models\SubKriteria', 'id_kriteria');
    }
}
