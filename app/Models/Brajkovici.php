<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brajkovici extends Model
{
    use HasFactory;

    protected $table = 'brajkovici';

    protected $fillable = ['title', 'body', 'image'];
}
