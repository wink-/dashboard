<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CalcValue
 *
 * @property int $ID
 * @property string|null $ValueName
 * @property string|null $Description
 * @property string|null $Formula
 * @property int $OrderCalc
 * @property string|null $FormName
 * @property int $DecimalPlaces
 * @property Carbon $TimeStamp
 *
 * @package App\Models
 */
class CalcValue extends Model
{
    protected $table = 'CalcValue';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'OrderCalc' => 'int',
        'DecimalPlaces' => 'int',
        'TimeStamp' => 'datetime'
    ];

    protected $fillable = [
        'ValueName',
        'Description',
        'Formula',
        'OrderCalc',
        'FormName',
        'DecimalPlaces',
        'TimeStamp'
    ];
}
