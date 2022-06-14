<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positifnegatif extends Model
{
    use HasFactory;
    protected $table = 'positifnegatifs';
    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
