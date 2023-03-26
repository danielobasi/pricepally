<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RecommendationOrder extends Model
{
    use HasFactory;

    public function order():BelongsTo {
        return  $this->belongsTo(Order::class,'order_id');
    }
    public function recommendedProduct():BelongsTo {
        return  $this->belongsTo(RecommendedProduct::class,'recommended_product_id');
    }
}
