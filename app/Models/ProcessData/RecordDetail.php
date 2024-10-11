<?php

namespace App\Models\ProcessData;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RecordDetail
 *
 * @property int $id
 * @property bool|null $active
 * @property string|null $name
 * @property string|null $description
 * @property string $unit_name
 * @property string $unit_description
 * @property int $logger_id
 * @property string|null $command
 * @property int|null $graph_y_lower
 * @property int|null $graph_y_upper
 * @property string|null $logger_name
 * @property bool $logger_active
 * @property string|null $ip
 * @property int|null $tcp_port
 * @property int|null $logger_type_id
 * @property int $record_type_id
 * @property string|null $record_type_name
 * @property float $multiplier
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class RecordDetail extends Model
{
    protected $table = 'record_details';
    public $incrementing = false;
    protected $connection = 'process_data';
    protected $casts = [
        'id' => 'int',
        'active' => 'bool',
        'logger_id' => 'int',
        'graph_y_lower' => 'int',
        'graph_y_upper' => 'int',
        'logger_active' => 'bool',
        'tcp_port' => 'int',
        'logger_type_id' => 'int',
        'record_type_id' => 'int',
        'multiplier' => 'float'
    ];

    protected $fillable = [
        'id',
        'active',
        'name',
        'description',
        'unit_name',
        'unit_description',
        'logger_id',
        'command',
        'graph_y_lower',
        'graph_y_upper',
        'logger_name',
        'logger_active',
        'ip',
        'tcp_port',
        'logger_type_id',
        'record_type_id',
        'record_type_name',
        'multiplier'
    ];
}
