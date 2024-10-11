<?php

namespace App\Models\ProcessData;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Amp
 *
 * @property int $id
 * @property int $record_id
 * @property int $amp
 * @property int $amp_minute
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Amp extends Model
{
    protected $table = 'amp';
    protected $connection = 'process_data';
    protected $casts = [
        'record_id' => 'int',
        'amp' => 'int',
        'amp_minute' => 'int'
    ];

    protected $fillable = [
        'record_id',
        'amp',
        'amp_minute'
    ];
}
