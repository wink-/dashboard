<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FormValueName
 *
 * @property int $ID
 * @property string $Name
 * @property string|null $FormName
 * @property string $Name1
 * @property string $Name2
 * @property string $Name3
 * @property string $Name4
 * @property string $Name5
 * @property string $Name6
 * @property string $Name7
 * @property string $Name8
 * @property string $Name9
 * @property string $Name10
 * @property string $Name11
 * @property string $Name12
 * @property string $Name13
 * @property string $Name14
 * @property string $Name15
 * @property string $Name16
 * @property string $Name17
 * @property string $Name18
 * @property string $Name19
 * @property string $Name20
 * @property string|null $Tank
 * @property Carbon $TimeStamp
 * @property string $Blank
 *
 * @package App\Models
 */
class FormValueName extends Model
{
    protected $table = 'FormValueName';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'TimeStamp' => 'datetime'
    ];

    protected $fillable = [
        'Name',
        'FormName',
        'Name1',
        'Name2',
        'Name3',
        'Name4',
        'Name5',
        'Name6',
        'Name7',
        'Name8',
        'Name9',
        'Name10',
        'Name11',
        'Name12',
        'Name13',
        'Name14',
        'Name15',
        'Name16',
        'Name17',
        'Name18',
        'Name19',
        'Name20',
        'Tank',
        'TimeStamp',
        'Blank'
    ];
}
