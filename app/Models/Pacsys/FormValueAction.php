<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FormValueAction
 *
 * @property int $ID
 * @property string $Name
 * @property string|null $FormName
 * @property bool $Action1
 * @property bool $Action2
 * @property bool $Action3
 * @property bool $Action4
 * @property bool $Action5
 * @property bool $Action6
 * @property bool $Action7
 * @property bool $Action8
 * @property bool $Action9
 * @property bool $Action10
 * @property bool $Action11
 * @property bool $Action12
 * @property bool $Action13
 * @property bool $Action14
 * @property bool $Action15
 * @property bool $Action16
 * @property bool $Action17
 * @property bool $Action18
 * @property bool $Action19
 * @property bool $Action20
 * @property bool $Tank
 * @property Carbon $TimeStamp
 *
 * @package App\Models
 */
class FormValueAction extends Model
{
    protected $table = 'FormValueAction';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'Action1' => 'bool',
        'Action2' => 'bool',
        'Action3' => 'bool',
        'Action4' => 'bool',
        'Action5' => 'bool',
        'Action6' => 'bool',
        'Action7' => 'bool',
        'Action8' => 'bool',
        'Action9' => 'bool',
        'Action10' => 'bool',
        'Action11' => 'bool',
        'Action12' => 'bool',
        'Action13' => 'bool',
        'Action14' => 'bool',
        'Action15' => 'bool',
        'Action16' => 'bool',
        'Action17' => 'bool',
        'Action18' => 'bool',
        'Action19' => 'bool',
        'Action20' => 'bool',
        'Tank' => 'bool',
        'TimeStamp' => 'datetime'
    ];

    protected $fillable = [
        'Name',
        'FormName',
        'Action1',
        'Action2',
        'Action3',
        'Action4',
        'Action5',
        'Action6',
        'Action7',
        'Action8',
        'Action9',
        'Action10',
        'Action11',
        'Action12',
        'Action13',
        'Action14',
        'Action15',
        'Action16',
        'Action17',
        'Action18',
        'Action19',
        'Action20',
        'Tank',
        'TimeStamp'
    ];
}
