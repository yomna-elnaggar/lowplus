<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;
    protected $guard = [];
    protected $fillable = [
        'name',
        'issue_number',
        'issue_date',
        'responsible_employee',
        'issue_amount',
        'files',
        'contender_name',
        'contender_phone',
        'contender_address',
        'contender_attorney',
        'contender_attorney_phone',
        'court',
        'judge_name',
        'court_city',
        'court_crcle',
        'pleading_degree',
        'customer_id',
        'issues_case_id',
        'issues_phase_id',
        'isues_type_id'
    ];

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function isuesType() {
        return $this->belongsTo(IsuesType::class, 'isues_type_id');
    }

    public function issuesPhase() {
        return $this->belongsTo(IssuesPhase::class, 'issues_phase_id');
    }

    public function issuesCase() {
        return $this->belongsTo(IssuesCase::class, 'issues_case_id');
    }

    public function sessions() {
        return $this->hasMany(Session::class, 'issue_id');
    }
}
