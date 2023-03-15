<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjektnaNastava extends Model
{
    use HasFactory;

    protected $table = 'projektna_nastava';

    protected $fillable = ['title', 'body'];
}
