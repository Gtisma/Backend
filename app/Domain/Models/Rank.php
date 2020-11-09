<?php

namespace App\Domain\Models;

use App\Domain\Models\ModelTraits\GetsTableName;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Gender
 * @package App\Domain\Models
 * @property int id
 * @property string name
 */
class Rank extends Model
{
    use GetsTableName;

    const ID = 'id';
    const NAME = 'name';
    const SECURITY_ID = 'security_id';

    public function security()
    {
        return $this->belongsTo(Security::class,self::SECURITY_ID);
    }

}
