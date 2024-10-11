<?php

namespace App\Models\ProcessData;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RecordType
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class RecordType extends Model
{
    protected $table = 'record_types';
    protected $connection = 'process_data';
    protected $fillable = [
        'name',
        'description'
    ];
}
