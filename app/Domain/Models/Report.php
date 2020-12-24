<?php

namespace App\Domain\Models;

use App\Domain\Models\ModelTraits\GetsTableName;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CrimeType
 * @package App\Domain\Models
 * @property int id
 * @property string file
 */
class Report extends Model
{
    use GetsTableName;

    const ID = 'id';
    const USER_ID = 'user_id';
    const STATE_ID = 'state_id';
    const ADDRESS = 'address';
    const STATUS= 'status';
    const CRIME_TYPE_ID= 'crime_type_id';
    const LOCATION = 'location';
    const DESCRIPTION = 'description';
    const R_REPORTCONTENT ='reportcontent';


    public function reportcontent()
    {
        return $this->hasMany(ReportContent::class,ReportContent::REPORT_ID,self::ID);
    }
    public function reportapproval()
    {
        return $this->hasOne(ReportApproval::class,self::ID);
    }

}
