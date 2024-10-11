<?php

namespace App\Models\ProcessData;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Unit
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Unit extends Model
{
    protected $table = 'units';
    protected $connection = 'process_data';
    protected $fillable = [
        'name',
        'description'
    ];
}
