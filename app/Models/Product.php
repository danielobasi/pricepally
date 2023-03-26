<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function category():BelongsTo {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function subCategory():BelongsTo {
        return  $this->belongsTo(SubCategory::class,'sub_category_id');

    }
    public function ratings():HasMany {
        return  $this->hasMany(ProductRating::class,'product_id');
    }
}
