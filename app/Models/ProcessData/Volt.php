<?php

namespace App\Models\ProcessData;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Volt
 *
 * @property int $id
 * @property int $record_id
 * @property float $volt
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Volt extends Model
{
    protected $table = 'volt';
    protected $connection = 'process_data';
    protected $casts = [
        'record_id' => 'int',
        'volt' => 'float'
    ];

    protected $fillable = [
        'record_id',
        'volt'
    ];
}
