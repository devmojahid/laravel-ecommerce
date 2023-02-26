<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'photos',
        'thumbnail',
        'summary',
        'description',
        'price',
        'discount',
        'discount_type',
        'discount_start',
        'discount_end',
        'sku',
        'barcode',
        'stock',
        'stock_alert',
        'weight',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'featured',
        'trending',
        'best_rated',
        'hot_new',
        'buyone_getone',
        'special_offer',
        'special_deal',
        'vat',
        'tax',
        'free_shipping',
        'product_video_link',
        'product_audio_link',
        'product_file_link',
        'category_id',
        'brand_id',
        'user_id',
        'color_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function discountPrice(){
        if($this->discount_type == 1){
            return $this->price - $this->discount;
        }else{
            return $this->price - ($this->price * ($this->discount / 100));
        }
    }
}
