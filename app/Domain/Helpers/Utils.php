<?php


use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Cache;


    /**
     * Created by PhpStorm.
     * User: Sandy
     * Date: 8/25/20
     * Time: 12:35 PM
     */

    function successResponse($data,$code =200,$message= null){
        $res = ['status' => 'success', 'data' => $data];
        if(isset($message)) $res["message"]= $message;
        return response()->json($res, $code);
    }

    function errorResponse($message,$code= 422){
        return response()->json(['status' => 'error', 'message' => $message], $code);
    }
    function failedResponse($message,$code=500){
        return response()->json(['status' => 'failed', 'message' => $message], $code);
    }

    function storeCacheMin($key,$value,$min =10){

        return Cache::put($key,$value, now()->addMinutes($min));
    }
    function getCache($key){
        return Cache::get($key);

    }
    function hasCache($key){
        return Cache::has($key);


    }
    function removeCache($key){
        return Cache::pull($key);
    }


   function generateUniqueId()
    {
        return str_replace('-', '', Uuid::uuid4()->toString());
    }

    function dashesToCamelCase($string, $capitalizeFirstCharacter = false)
    {

        $str = str_replace('', '', ucwords(str_replace('_', ' ', $string)));

        if (!$capitalizeFirstCharacter) {
            $str[0] = strtolower($str[0]);
        }

        return $str;
    }

     // Generate Standard Payment reference
 function generateTransactionRef() {
		//generate most suitable transaction ref
		$ref = date( "Ymd" ) . time().mt_rand(10000,99999);
		return $ref;
    }

