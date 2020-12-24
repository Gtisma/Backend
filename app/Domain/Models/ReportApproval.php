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
class ReportApproval extends Model
{
    use GetsTableName;

    const ID = 'id';
    const USER_ID = 'user_id';
    const REPORT_ID = 'report_id';

    public function user()
    {
        return $this->BelongsTo(User::class,self::USER_ID);
    }

    public function report()
    {
        return $this->BelongsTo(Report::class,self::REPORT_ID);
    }

}
