<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radanovci extends Model
{
    use HasFactory;

    protected $table = 'radanovci';

    protected $fillable = ['title', 'body', 'image'];
}
