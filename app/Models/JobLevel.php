<?php
namespace App\Models;

class JobLevel extends TigoModel
{
    protected $collection = 'job_levels';
    public $fillable = [
        'code',
        'name',
        'industry_ids',
        'icon',
        'index',
        'created_at',
        'update_at',
    ];
}