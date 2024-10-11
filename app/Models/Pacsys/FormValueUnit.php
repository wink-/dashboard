<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FormValueUnit
 *
 * @property int $ID
 * @property string $Name
 * @property string|null $FormName
 * @property string|null $unit1
 * @property string|null $unit2
 * @property string|null $unit3
 * @property string|null $unit4
 * @property string|null $unit5
 * @property string|null $unit6
 * @property string|null $unit7
 * @property string|null $unit8
 * @property string|null $unit9
 * @property string|null $unit10
 * @property string|null $unit11
 * @property string|null $unit12
 * @property string|null $unit13
 * @property string|null $unit14
 * @property string|null $unit15
 * @property string|null $unit16
 * @property string|null $unit17
 * @property string|null $unit18
 * @property string|null $unit19
 * @property string|null $unit20
 * @property string $Tank
 * @property Carbon $TimeStamp
 *
 * @package App\Models
 */
class FormValueUnit extends Model
{
    protected $table = 'FormValueUnit';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'TimeStamp' => 'datetime'
    ];

    protected $fillable = [
        'Name',
        'FormName',
        'unit1',
        'unit2',
        'unit3',
        'unit4',
        'unit5',
        'unit6',
        'unit7',
        'unit8',
        'unit9',
        'unit10',
        'unit11',
        'unit12',
        'unit13',
        'unit14',
        'unit15',
        'unit16',
        'unit17',
        'unit18',
        'unit19',
        'unit20',
        'Tank',
        'TimeStamp'
    ];
}
