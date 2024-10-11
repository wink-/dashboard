<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Period
 *
 * @property int $ID
 * @property string|null $Period
 * @property string|null $Description
 *
 * @package App\Models
 */
class Period extends Model
{
    protected $table = 'Period';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $fillable = [
        'Period',
        'Description'
    ];
}
