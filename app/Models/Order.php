<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    use HasFactory;

    public function user():BelongsTo {
        return  $this->belongsTo(User::class,'user_id');
    }
    //An order can have a type of product, deal or recommendation and based on the type we load the association/relationship for display
    public  function deal():HasOne {
        return  $this->hasOne(DealOrder::class,'order_id');
    }
    public function product():HasOne {
        return  $this->hasOne(ProductOrder::class,'order_id');
    }
    public function recommendation():HasOne {
        return  $this->hasOne(RecommendationOrder::class,'product_id');
    }
}
