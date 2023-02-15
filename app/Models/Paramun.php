<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paramun extends Model
{
    use HasFactory;

    protected $table = 'paramun';

    protected $fillable = ['title', 'body', 'image'];
}
