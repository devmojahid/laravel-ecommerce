<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'favicon',
        'currency',
        'currency_symbol',
        'phone',
        'phone2',
        'email',
        'support_email',
        'address',
        'city',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'youtube',
    ];
}
