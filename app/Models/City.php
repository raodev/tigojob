<?php
namespace App\Models;

class City extends TigoModel
{
    protected $collection = 'cities';
    protected $prefix = 'CI';
    protected $alias_type = 'city';
    public $fillable = [
        'name',
        'icon',
        'country_id',
        'index',
        'created_at',
        'update_at',
    ];
}