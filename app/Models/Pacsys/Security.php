<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Security
 *
 * @property int $ID
 * @property string|null $EmpCode
 * @property string|null $Scope
 * @property Carbon $TimeStamp
 *
 * @package App\Models
 */
class Security extends Model
{
    protected $table = 'Security';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'TimeStamp' => 'datetime'
    ];

    protected $fillable = [
        'EmpCode',
        'Scope',
        'TimeStamp'
    ];
}
