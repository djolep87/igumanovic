<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Razana extends Model
{
    use HasFactory;

    protected $table = 'razana';

    protected $fillable = ['title', 'body', 'image'];
}
