<?php
namespace App\Models;

class Company extends TigoModel
{
    protected $collection = 'companies';
    public $fillable = [
        'name',
        'logo_file',
        'country_id',
        'city_id',
        'district_id',
        'index',
        'created_at',
        'update_at',
    ];
}