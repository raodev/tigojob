<?php
namespace App\Models;

class JobTitle extends TigoModel
{
    protected $collection = 'job_tiles';
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