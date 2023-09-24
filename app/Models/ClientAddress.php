<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'zip_code',
        'address',
        'number',
        'complement',
        'neighborhood',
        'city',
        'state'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
