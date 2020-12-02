<?php
/**
 * Created by PhpStorm.
 * User: Sandy
 * Date: 8/28/18
 * Time: 3:58 PM
 */

namespace App\Domain\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait Uuids
{

/**
     * Boot function from laravel.
     */


    public static function bootUuids()
    {
        static::creating(function (Model $model) {
            $model->{$model->getKeyName()} = Str::orderedUuid()->toString();
        });
    }
//    public function getIncrementing()
//    {
//        return false;
//    }

//    public function getKeyType()
//    {
//        return 'string';
//    }



}
