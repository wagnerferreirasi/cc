<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'cnpj',
        'email',
        'phone',
        'zipcode',
        'address',
        'number',
        'complement',
        'neighborhood',
        'city',
        'state'
    ];
}
