<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Analysi
 *
 * @property int $ID
 * @property string|null $RecordName
 * @property string|null $FormName
 * @property Carbon $Date
 * @property string|null $Value1
 * @property string|null $Value2
 * @property string|null $Value3
 * @property string|null $Value4
 * @property string|null $Value5
 * @property string|null $Value6
 * @property string|null $Value7
 * @property string|null $Value8
 * @property string|null $Value9
 * @property string|null $Value10
 * @property string|null $Value11
 * @property string|null $Value12
 * @property string|null $Value13
 * @property string|null $Value14
 * @property string|null $Value15
 * @property string|null $Value16
 * @property string|null $Value17
 * @property string|null $Value18
 * @property string|null $Value19
 * @property string|null $Value20
 * @property string $Tank
 * @property string|null $EmpCode
 * @property Carbon $TimeStamp
 * @property bool $DeleteVisible
 * @property string $IDy
 * @property string|null $ActValue1
 * @property string|null $ActValue2
 * @property string|null $ActValue3
 * @property string|null $ActValue4
 * @property string|null $ActValue5
 * @property string|null $ActValue6
 * @property string|null $ActValue7
 * @property string|null $ActValue8
 * @property string|null $ActValue9
 * @property string|null $ActValue10
 * @property string|null $ActValue11
 * @property string|null $ActValue12
 * @property string|null $ActValue13
 * @property string|null $ActValue14
 * @property string|null $ActValue15
 * @property string|null $ActValue16
 * @property string|null $ActValue17
 * @property string|null $ActValue18
 * @property string|null $ActValue19
 * @property string|null $ActValue20
 *
 * @package App\Models
 */
class Analysi extends Model
{
    protected $table = 'Analysis';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'Date' => 'datetime',
        'TimeStamp' => 'datetime',
        'DeleteVisible' => 'bool'
    ];

    protected $fillable = [
        'RecordName',
        'FormName',
        'Date',
        'Value1',
        'Value2',
        'Value3',
        'Value4',
        'Value5',
        'Value6',
        'Value7',
        'Value8',
        'Value9',
        'Value10',
        'Value11',
        'Value12',
        'Value13',
        'Value14',
        'Value15',
        'Value16',
        'Value17',
        'Value18',
        'Value19',
        'Value20',
        'Tank',
        'EmpCode',
        'TimeStamp',
        'DeleteVisible',
        'IDy',
        'ActValue1',
        'ActValue2',
        'ActValue3',
        'ActValue4',
        'ActValue5',
        'ActValue6',
        'ActValue7',
        'ActValue8',
        'ActValue9',
        'ActValue10',
        'ActValue11',
        'ActValue12',
        'ActValue13',
        'ActValue14',
        'ActValue15',
        'ActValue16',
        'ActValue17',
        'ActValue18',
        'ActValue19',
        'ActValue20'
    ];
}
