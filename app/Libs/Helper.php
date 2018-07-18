<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/5/2018
 * Time: 6:48 PM
 */

namespace App\Libs;


class Helper
{
    public static function convertObjectName( $name ){
        $word = ucfirst(strtolower( $name ) );
        $prefixs = explode( '-', $word );
        $method_name = "";
        foreach ($prefixs as $prefix ) {
            $method_name .= ucfirst( strtolower($prefix) );
        }
        return $method_name;
    }
    public static function getMethod( $class, $method ){
        $client_method = strtolower(request()->method());
        $method = self::convertObjectName( $method );
        return empty( $client_method ) ? $method : $client_method . $method;

    }

    /**
     * Sao chép dữ liệu từ mảng source sang target
     * @param array $source :  mảng nguồn
     * @param array $target :  mảng hứng dữ liệu
     * @param array $copy_keys : danh sách key cần sao chép dữ liệu
     * @param bool $override - chế độ sao chép có ghi đè hay không ( option - default : true )
     */
    public static function copyData( $source = [], &$target = [], $copy_keys = [], $override = true ){
        foreach( $copy_keys as $key ){
            if( isset( $source[$key] ) ){
                if( isset( $target[ $key ] )  ){
                    if( $override ){
                        $target[$key] = $source[$key];
                    }
                }else{
                    $target[$key] = $source[$key];
                }
            }
        }
    }

    public static function rvEncrypt( $q ) {
        $cryptKey  = env('HAS_RV', 'qJB0rGtIn5UB1xG03efyCp');
        $qEncoded      = base64_encode( bcrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
        return( $qEncoded );
    }

    public static function rvDecrypt( $q ) {
        $cryptKey  = env('HAS_RV', 'qJB0rGtIn5UB1xG03efyCp');
        $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
        return( $qDecoded );
    }
}