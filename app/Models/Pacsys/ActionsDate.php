<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ActionsDate
 *
 * @property Carbon|null $ActionDate
 *
 * @package App\Models
 */
class ActionsDate extends Model
{
    protected $table = 'ActionsDates';
    public $incrementing = false;
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'ActionDate' => 'datetime'
    ];

    protected $fillable = [
        'ActionDate'
    ];
}
