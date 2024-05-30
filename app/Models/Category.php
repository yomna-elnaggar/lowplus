<?php

namespace App\Models;

use App\Models\Governorate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'created_by',
    ];

    public function governorates()
    {
        return $this->belongsToMany(Governorate::class, 'gover_categories', 'category_id', 'governorate_id');
    }
}
