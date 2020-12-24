<?php

namespace App\Domain\Models;

use App\Domain\Models\ModelTraits\GetsTableName;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CrimeType
 * @package App\Domain\Models
 * @property int id
 * @property string file_url
 * @property int report_type_id
 */
class ReportContent extends Model
{
    use GetsTableName;

    const ID = 'id';
    const FILE_URL = 'file_url';
    const REPORT_TYPE_ID = 'report_type_id';
    const REPORT_ID = 'report_id';

    public function reports()
    {
        return $this->hasMany(Report::class,self::ID);
    }

    public function reporttype()
    {
        return $this->BelongsTo(ReportType::class,self::REPORT_TYPE_ID);
    }


}
