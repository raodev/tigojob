<?php
namespace App\Models;

class Country extends TigoModel
{
    protected $collection = 'countries';
    protected $prefix = 'CO';
    protected $alias_type = 'country';
    public $fillable = [
        'name',
        'code',
        'icon',
        'index',
        'created_at',
        'update_at',
    ];
}