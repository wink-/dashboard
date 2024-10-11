<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FormValueVisible
 *
 * @property int $ID
 * @property string $Name
 * @property string|null $FormName
 * @property bool $Visible1
 * @property bool $Visible2
 * @property bool $Visible3
 * @property bool $Visible4
 * @property bool $Visible5
 * @property bool $Visible6
 * @property bool $Visible7
 * @property bool $Visible8
 * @property bool $Visible9
 * @property bool $Visible10
 * @property bool $Visible11
 * @property bool $Visible12
 * @property bool $Visible13
 * @property bool $Visible14
 * @property bool $Visible15
 * @property bool $Visible16
 * @property bool $Visible17
 * @property bool $Visible18
 * @property bool $Visible19
 * @property bool $Visible20
 * @property bool $Tank
 * @property Carbon $TimeStamp
 *
 * @package App\Models
 */
class FormValueVisible extends Model
{
    protected $table = 'FormValueVisible';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'Visible1' => 'bool',
        'Visible2' => 'bool',
        'Visible3' => 'bool',
        'Visible4' => 'bool',
        'Visible5' => 'bool',
        'Visible6' => 'bool',
        'Visible7' => 'bool',
        'Visible8' => 'bool',
        'Visible9' => 'bool',
        'Visible10' => 'bool',
        'Visible11' => 'bool',
        'Visible12' => 'bool',
        'Visible13' => 'bool',
        'Visible14' => 'bool',
        'Visible15' => 'bool',
        'Visible16' => 'bool',
        'Visible17' => 'bool',
        'Visible18' => 'bool',
        'Visible19' => 'bool',
        'Visible20' => 'bool',
        'Tank' => 'bool',
        'TimeStamp' => 'datetime'
    ];

    protected $fillable = [
        'Name',
        'FormName',
        'Visible1',
        'Visible2',
        'Visible3',
        'Visible4',
        'Visible5',
        'Visible6',
        'Visible7',
        'Visible8',
        'Visible9',
        'Visible10',
        'Visible11',
        'Visible12',
        'Visible13',
        'Visible14',
        'Visible15',
        'Visible16',
        'Visible17',
        'Visible18',
        'Visible19',
        'Visible20',
        'Tank',
        'TimeStamp'
    ];
}
