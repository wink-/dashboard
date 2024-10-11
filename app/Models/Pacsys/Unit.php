<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Unit
 *
 * @property int $ID
 * @property string|null $Unit
 * @property string|null $Description
 *
 * @package App\Models
 */
class Unit extends Model
{
    protected $table = 'Unit';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $fillable = [
        'Unit',
        'Description'
    ];
}
