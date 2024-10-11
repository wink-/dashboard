<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FormValueType
 *
 * @property int $ID
 * @property string $Name
 * @property string|null $FormName
 * @property string $Type1
 * @property string $Type2
 * @property string $Type3
 * @property string $Type4
 * @property string $Type5
 * @property string $Type6
 * @property string $Type7
 * @property string $Type8
 * @property string $Type9
 * @property string $Type10
 * @property string $Type11
 * @property string $Type12
 * @property string $Type13
 * @property string $Type14
 * @property string $Type15
 * @property string $Type16
 * @property string $Type17
 * @property string $Type18
 * @property string $Type19
 * @property string $Type20
 * @property string $Tank
 * @property Carbon $TimeStamp
 * @property bool $False
 * @property bool $True
 *
 * @package App\Models
 */
class FormValueType extends Model
{
    protected $table = 'FormValueType';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'TimeStamp' => 'datetime',
        'False' => 'bool',
        'True' => 'bool'
    ];

    protected $fillable = [
        'Name',
        'FormName',
        'Type1',
        'Type2',
        'Type3',
        'Type4',
        'Type5',
        'Type6',
        'Type7',
        'Type8',
        'Type9',
        'Type10',
        'Type11',
        'Type12',
        'Type13',
        'Type14',
        'Type15',
        'Type16',
        'Type17',
        'Type18',
        'Type19',
        'Type20',
        'Tank',
        'TimeStamp',
        'False',
        'True'
    ];
}
