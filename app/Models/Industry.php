<?php
namespace App\Models;

class Industry extends TigoModel
{
    protected $collection = 'industries';
    protected $prefix = 'IN';
    protected $alias_type = 'industries';
    public $fillable = [
        'name',
        'icon',
        'index',
        'created_at',
        'update_at',
    ];
}