<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'sessionDateTime',
        'session_require',
        'session_link',
        'note',
        'files',
        'court',
        'judge_name',
        'court_city',
        'court_crcle',
        'pleading_degree',
        'issue_id',
    ];
    public function issue() {
        return $this->belongsTo(Issue::class, 'issue_id');
    }
}
