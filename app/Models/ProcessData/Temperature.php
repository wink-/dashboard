<?php

namespace App\Models\ProcessData;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Temperature
 *
 * @property int $id
 * @property int $record_id
 * @property int $temperature
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Temperature extends Model
{
    protected $table = 'temperature';
    protected $connection = 'process_data';
    protected $casts = [
        'record_id' => 'int',
        'temperature' => 'int'
    ];

    protected $fillable = [
        'record_id',
        'temperature'
    ];
}
