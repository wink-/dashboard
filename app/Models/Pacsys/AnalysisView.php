<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnalysisView
 *
 * @property int $ID
 * @property string|null $RecordName
 * @property string|null $FormName
 * @property string|null $Date
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
 *
 * @package App\Models
 */
class AnalysisView extends Model
{
    protected $table = 'AnalysisView';
    public $incrementing = false;
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'ID' => 'int'
    ];

    protected $fillable = [
        'ID',
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
        'Value20'
    ];
}
