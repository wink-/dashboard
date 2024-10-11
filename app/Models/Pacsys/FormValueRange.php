<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FormValueRange
 *
 * @property int $ID
 * @property string $Name
 * @property string|null $FormName
 * @property string $min1
 * @property string $max1
 * @property string $min2
 * @property string $max2
 * @property string $min3
 * @property string $max3
 * @property string $min4
 * @property string $max4
 * @property string $min5
 * @property string $max5
 * @property string $min6
 * @property string $max6
 * @property string $min7
 * @property string $max7
 * @property string $min8
 * @property string $max8
 * @property string $min9
 * @property string $max9
 * @property string $min10
 * @property string $max10
 * @property string $min11
 * @property string $max11
 * @property string $min12
 * @property string $max12
 * @property string $min13
 * @property string $max13
 * @property string $min14
 * @property string $max14
 * @property string $min15
 * @property string $max15
 * @property string $min16
 * @property string $max16
 * @property string $min17
 * @property string $max17
 * @property string $min18
 * @property string $max18
 * @property string $min19
 * @property string $max19
 * @property string $min20
 * @property string $max20
 * @property string|null $Tank
 * @property Carbon $TimeStamp
 *
 * @package App\Models
 */
class FormValueRange extends Model
{
    protected $table = 'FormValueRange';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'TimeStamp' => 'datetime'
    ];

    protected $fillable = [
        'Name',
        'FormName',
        'min1',
        'max1',
        'min2',
        'max2',
        'min3',
        'max3',
        'min4',
        'max4',
        'min5',
        'max5',
        'min6',
        'max6',
        'min7',
        'max7',
        'min8',
        'max8',
        'min9',
        'max9',
        'min10',
        'max10',
        'min11',
        'max11',
        'min12',
        'max12',
        'min13',
        'max13',
        'min14',
        'max14',
        'min15',
        'max15',
        'min16',
        'max16',
        'min17',
        'max17',
        'min18',
        'max18',
        'min19',
        'max19',
        'min20',
        'max20',
        'Tank',
        'TimeStamp'
    ];
}
