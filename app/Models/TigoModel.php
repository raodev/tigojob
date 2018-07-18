<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/7/2018
 * Time: 12:56 PM
 */

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model;

/**
 * @property array res
 */
class TigoModel extends Model
{
    protected $connection = 'mongodb';
    public $timestamps = false;
    protected $prefix = 'CODE';
    protected $length_code = 6;
    public $response = [
        'success' => true,
        'errors' => [],
        'message' => ''
    ];
    protected static $res = [
        'success' => true,
        'errors' => [],
        'message' => ''
    ];
    public static function boot()
    {
        parent::boot();
        static::creating(function($model)
        {

            $model->created_at = $model->updated_at = time();
            if( in_array('code', $model->fillable) ){
                $model->index = isset( $model->index ) ? intval( $model->index ) : 0;
            }
            if( in_array('code', $model->fillable) && empty( $model->code ) ){
                $year = strtotime(date('Y-m') . '-01');
                $count = $model->where('created_at', '>', $year)->count() + 1;
                $increament = str_pad($count, $model->length_code, '0', STR_PAD_LEFT);
                $prefix = property_exists( $model, 'prefix' ) ? $model->prefix : 'CODE';
                $prefix = $prefix . '-' . date('dmy') . "-" . $increament;
                $model->code = $prefix;
            }
        });
        static::created(function($model){
            $class_name = get_class( $model );
            if( $class_name != 'App\Models\Alias' && property_exists( $model, 'alias_type' ) ){
                Alias::create([
                    'alias' => str_slug($model->name),
                    'relation_id' => $model->id,
                    'type' => $model->alias_type
                ]);
            }
        });
        static::updating(function($model)
        {
            $model->updated_at = time();
            if( in_array('code', $model->fillable) ){
                $model->index = isset( $model->index ) ? intval( $model->index ) : 0;
            }
        });
        static::deleting(function($model){

        });
    }
}