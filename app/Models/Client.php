<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'cpf',
        'fone_number1',
        'fone_number2',
    ];

    protected $hidden = [
        'password',
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
