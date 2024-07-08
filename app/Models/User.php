<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Sale;
use App\Models\Country;
use App\Models\Product;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Governorate;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'logo',
        'password',
        'status',
        'phone',
        'created_by',
        'salary',
        'address',
        'national_id',
        'category_id',
        'jobtitle_id',
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
        'password' => 'hashed',
    ];

    public function governorates()
    {
        return $this->belongsToMany(Governorate::class, 'gover_mandobs', 'mandob_id', 'governorate_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'user_id');
    }

    public function sales()
    {
        return $this->hasMany(Sale::class, 'user_id');
    }

    public function customers()
    {
        return $this->hasMany(Customer::class, 'user_id');
    }
}
