<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobtitle extends Model
{
    use HasFactory;

    protected $guard = [];
    protected $fillable = ['name']; 

    public function employees() {
        return $this->hasMany(User::class, 'jobtitle_id');
    }
}
