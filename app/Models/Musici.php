<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musici extends Model
{
    use HasFactory;

    protected $table = 'musici';

    protected $fillable = ['title', 'body', 'image'];
}
