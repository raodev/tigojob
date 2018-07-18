<?php
namespace App\Models;

class JobType extends TigoModel

{
    protected $collection = 'job_types';
    protected $prefix = 'CO';
    protected $alias_type = 'job_type';

    public $fillable = [
        'code',
        'name',
        'icon',
        'index',
        'created_at',
        'update_at',
    ];
}