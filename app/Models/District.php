<?php
namespace App\Models;

class District extends TigoModel
{
    protected $collection = 'districts';
    protected $prefix = 'DI';
    protected $alias_type = 'district';
    public $fillable = [
        'name',
        'icon',
        'country_id',
        'city_id',
        'index',
        'created_at',
        'update_at',
    ];
}