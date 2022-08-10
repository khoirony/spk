<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preferensi extends Model
{
    use HasFactory;
    protected $table = 'preferensis';
    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
