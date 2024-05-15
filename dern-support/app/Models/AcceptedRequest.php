<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'service_name',
        'category',
        'price',
        'statue',
    ];
}

