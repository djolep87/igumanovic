<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zarici extends Model
{
    use HasFactory;

    protected $table = 'zarici';

    protected $fillable = ['title', 'body', 'image'];
}
