<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opsi extends Model
{
    use HasFactory;
    protected $table = 'option';
    protected $fillable = [
        'id',
        'opsi',
        'points'
    ];

}