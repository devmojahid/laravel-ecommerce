<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'photo',
        'icon',
        'summary',
        'is_parent',
        'status',
        'parent_id',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
