<?php

namespace App\Domain\Models;

use App\Domain\Models\ModelTraits\GetsTableName;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CrimeType
 * @package App\Domain\Models
 * @property int id
 * @property string name
 */
class ReportType extends Model
{
    use GetsTableName;

    const ID = 'id';
    const NAME = 'name';

    public function reportcontent()
    {
        return $this->hasMany(ReportContent::class,self::ID);
    }

}
