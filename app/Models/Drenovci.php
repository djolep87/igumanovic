<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drenovci extends Model
{
    use HasFactory;

    protected $table = 'drenovci';

    protected $fillable = ['title', 'body', 'image'];
}
