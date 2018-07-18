<?php
namespace App\Models;

class Job extends TigoModel
{
    protected $collection = 'jobs';
    public $fillable = [
        'title',
        'experience_type',
        'job_title_ids',
        'job_type_ids',
        'industry_ids',
        'city_ids',
        'district_ids',
        'address',
        'description',
        'required_info',
        'user_created_id',
        'user_approval_id',
        'current_status',
        'status',
        'features',
        'count', // .view | .apply | .share
        'finish_recruit',
        'created_at',
        'updated_at'
    ];
    protected $casts = [
        'finish_recruit' => 'boolean'
    ];
}