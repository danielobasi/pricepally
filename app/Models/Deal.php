<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Deal extends Model
{
    use HasFactory;
    public  function product():BelongsTo {
        return  $this->belongsTo(Product::class,'product_id');
    }
    public function dealOrders():HasMany{
        return $this->hasMany(DealOrder::class,'deal_id');
    }
}
