<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Month
 *
 * @property string $MonthNumber
 * @property string $MonthName
 *
 * @package App\Models
 */
class Month extends Model
{
    protected $table = 'Months';
    protected $primaryKey = 'MonthNumber';
    public $incrementing = false;
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $fillable = [
        'MonthName'
    ];
}
