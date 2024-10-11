<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FormType
 *
 * @property int $ID
 * @property string|null $FormType
 * @property string|null $Description
 * @property Carbon $TimeStamp
 *
 * @package App\Models
 */
class FormType extends Model
{
    protected $table = 'FormType';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'TimeStamp' => 'datetime'
    ];

    protected $fillable = [
        'FormType',
        'Description',
        'TimeStamp'
    ];
}
