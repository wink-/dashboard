<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ActionsTemp
 *
 * @property int $IDx
 * @property int $ID
 * @property string|null $RecordName
 * @property string|null $FormName
 * @property string|null $ValueName
 * @property string $Value
 * @property Carbon|null $RecDate
 * @property Carbon|null $ActDate
 * @property bool $Complete
 * @property string $RecEmpCode
 * @property string $ActEmpCode
 * @property string $Unit
 * @property string|null $ActValue
 * @property string|null $ScopeName
 * @property string $Comment
 * @property string $Tank
 * @property Carbon $TimeStamp
 * @property string|null $EmpName
 * @property string|null $IDy
 * @property int|null $ValueNum
 *
 * @package App\Models
 */
class ActionsTemp extends Model
{
    protected $table = 'ActionsTemp';
    protected $primaryKey = 'IDx';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'ID' => 'int',
        'RecDate' => 'datetime',
        'ActDate' => 'datetime',
        'Complete' => 'bool',
        'TimeStamp' => 'datetime',
        'ValueNum' => 'int'
    ];

    protected $fillable = [
        'ID',
        'RecordName',
        'FormName',
        'ValueName',
        'Value',
        'RecDate',
        'ActDate',
        'Complete',
        'RecEmpCode',
        'ActEmpCode',
        'Unit',
        'ActValue',
        'ScopeName',
        'Comment',
        'Tank',
        'TimeStamp',
        'EmpName',
        'IDy',
        'ValueNum'
    ];
}
