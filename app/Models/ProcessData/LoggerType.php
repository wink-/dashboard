<?php

namespace App\Models\ProcessData;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LoggerType
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class LoggerType extends Model
{
    protected $table = 'logger_types';
    protected $connection = 'process_data';
    protected $fillable = [
        'name',
        'description'
    ];
}
