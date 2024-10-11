<?php

namespace App\Models\ProcessData;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Logger
 *
 * @property int $id
 * @property bool $active
 * @property string|null $name
 * @property string|null $description
 * @property int|null $logger_type_id
 * @property string|null $ip_address
 * @property int|null $port
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Logger extends Model
{
    protected $table = 'loggers';
    protected $connection = 'process_data';
    protected $casts = [
        'active' => 'bool',
        'logger_type_id' => 'int',
        'port' => 'int'
    ];

    protected $fillable = [
        'active',
        'name',
        'description',
        'logger_type_id',
        'ip_address',
        'port'
    ];
}
