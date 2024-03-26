<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class albums extends Model
{
    use HasFactory;
    protected $table = 'alba';
    public $timestamps = false;
}
