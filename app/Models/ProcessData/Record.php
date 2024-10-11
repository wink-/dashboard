<?php

namespace App\Models\ProcessData;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Record
 *
 * @property int $id
 * @property bool|null $active
 * @property string|null $name
 * @property int $logger_id
 * @property int $record_type_id
 * @property string|null $command
 * @property float $multiplier
 * @property string|null $description
 * @property int|null $unit_id
 * @property int|null $graph_y_lower
 * @property int|null $graph_y_upper
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Record extends Model
{
    protected $table = 'records';
    protected $connection = 'process_data';
    protected $casts = [
        'active' => 'bool',
        'logger_id' => 'int',
        'record_type_id' => 'int',
        'multiplier' => 'float',
        'unit_id' => 'int',
        'graph_y_lower' => 'int',
        'graph_y_upper' => 'int'
    ];

    protected $fillable = [
        'active',
        'name',
        'logger_id',
        'record_type_id',
        'command',
        'multiplier',
        'description',
        'unit_id',
        'graph_y_lower',
        'graph_y_upper'
    ];
}
