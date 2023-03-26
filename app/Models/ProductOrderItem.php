<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductOrderItem extends Model
{
    use HasFactory;

    public function productOrder():BelongsTo {
        return  $this->belongsTo(ProductOrder::class,'product_order_id');
    }
    public  function  product():BelongsTo {
        return  $this->belongsTo(Product::class, 'product_id');
    }
}
