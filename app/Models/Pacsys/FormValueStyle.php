<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FormValueStyle
 *
 * @property string|null $FormName
 * @property string $Width1
 * @property string $Width2
 * @property string $Width3
 * @property string $Width4
 * @property string $Width5
 * @property string $Width6
 * @property string $Width7
 * @property string $Width8
 * @property string $Width9
 * @property string $Width10
 * @property string $Width11
 * @property string $Width12
 * @property string $Width13
 * @property string $Width14
 * @property string $Width15
 * @property string $Width16
 * @property string $Width17
 * @property string $Width18
 * @property string $Width19
 * @property string $Width20
 *
 * @package App\Models
 */
class FormValueStyle extends Model
{
    protected $table = 'FormValueStyle';
    public $incrementing = false;
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $fillable = [
        'FormName',
        'Width1',
        'Width2',
        'Width3',
        'Width4',
        'Width5',
        'Width6',
        'Width7',
        'Width8',
        'Width9',
        'Width10',
        'Width11',
        'Width12',
        'Width13',
        'Width14',
        'Width15',
        'Width16',
        'Width17',
        'Width18',
        'Width19',
        'Width20'
    ];
}
