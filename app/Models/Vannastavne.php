<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vannastavne extends Model
{
    use HasFactory;

    protected $table = 'vannastavne';

    protected $fillable = ['title', 'body'];
}
