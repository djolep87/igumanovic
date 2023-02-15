<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skakavci extends Model
{
    use HasFactory;

    protected $table = 'skakavci';

    protected $fillable = ['title', 'body', 'image'];
}
