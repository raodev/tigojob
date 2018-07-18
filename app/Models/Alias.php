<?php
namespace App\Models;

class Alias extends TigoModel
{
    protected $collection = 'alias';
    public $fillable = [
        'alias',
        'type',
        'relation_id'
    ];
}