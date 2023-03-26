<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function savedProducts():HasMany {
        return  $this->HasMany(SavedProduct::class,'user_id');
    }
//    public function addresses():HasMany {
//        return  $this->HasMany(UserAddress::class,'user_id');
//    }
    public function address():HasOne{
        return  $this->HasOne(UserAddress::class,'user_id');
    }
    public function referrals():HasMany {
        return  $this->HasMany(UserReferral::class,'user_id');
    }
    public function orders():HasMany {
        return  $this->HasMany(Order::class,'user_id');
    }
    public function notifications():HasMany {
        return  $this->HasMany(UserNotification::class,'user_id');
    }
    public function shoppingLists():HasMany {
        return  $this->hasMany(ShoppingList::class,'user_id');
    }
}
