<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'mrp',
        'selling_price',
        'stock',
        'seo',
        'status',
    ];

    public function productImage()
    {
        return $this->belongsTo(ProductImage::class);
    }
}