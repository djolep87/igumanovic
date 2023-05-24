<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NasiRadovi extends Model
{
    use HasFactory;

    protected $table = 'nasi_radovi';

    protected $fillable = ['title', 'body'];
}
