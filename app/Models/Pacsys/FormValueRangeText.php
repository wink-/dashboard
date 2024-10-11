<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FormValueRangeText
 *
 * @property string|null $FormName
 * @property string $Name
 * @property string|null $range1
 * @property string|null $range2
 * @property string|null $range3
 * @property string|null $range4
 * @property string|null $range5
 * @property string|null $range6
 * @property string|null $range7
 * @property string|null $range8
 * @property string|null $range9
 * @property string|null $range10
 * @property string|null $range11
 * @property string|null $range12
 * @property string|null $range13
 * @property string|null $range14
 * @property string|null $range15
 * @property string|null $range16
 * @property string|null $range17
 * @property string|null $range18
 * @property string|null $range19
 * @property string|null $range20
 *
 * @package App\Models
 */
class FormValueRangeText extends Model
{
    protected $table = 'FormValueRangeText';
    public $incrementing = false;
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $fillable = [
        'FormName',
        'Name',
        'range1',
        'range2',
        'range3',
        'range4',
        'range5',
        'range6',
        'range7',
        'range8',
        'range9',
        'range10',
        'range11',
        'range12',
        'range13',
        'range14',
        'range15',
        'range16',
        'range17',
        'range18',
        'range19',
        'range20'
    ];
}
