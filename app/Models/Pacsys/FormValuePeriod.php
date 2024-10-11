<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FormValuePeriod
 *
 * @property int $ID
 * @property string $Name
 * @property string|null $FormName
 * @property string $Period1
 * @property string $Period2
 * @property string $Period3
 * @property string $Period4
 * @property string $Period5
 * @property string $Period6
 * @property string $Period7
 * @property string $Period8
 * @property string $Period9
 * @property string $Period10
 * @property string $Period11
 * @property string $Period12
 * @property string $Period13
 * @property string $Period14
 * @property string $Period15
 * @property string $Period16
 * @property string $Period17
 * @property string $Period18
 * @property string $Period19
 * @property string $Period20
 * @property string|null $Tank
 * @property Carbon $TimeStamp
 *
 * @package App\Models
 */
class FormValuePeriod extends Model
{
    protected $table = 'FormValuePeriod';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'TimeStamp' => 'datetime'
    ];

    protected $fillable = [
        'Name',
        'FormName',
        'Period1',
        'Period2',
        'Period3',
        'Period4',
        'Period5',
        'Period6',
        'Period7',
        'Period8',
        'Period9',
        'Period10',
        'Period11',
        'Period12',
        'Period13',
        'Period14',
        'Period15',
        'Period16',
        'Period17',
        'Period18',
        'Period19',
        'Period20',
        'Tank',
        'TimeStamp'
    ];
}
