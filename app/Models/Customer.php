<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    //add o campo imagem
    protected $fillable = ['image', 'nome', 'idade', 'nivel'];
}
