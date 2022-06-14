<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terbobot extends Model
{
    use HasFactory;
    protected $table = 'terbobots';
    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
