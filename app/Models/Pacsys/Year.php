<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Year
 *
 * @property string $Year
 *
 * @package App\Models
 */
class Year extends Model
{
    protected $table = 'Years';
    protected $primaryKey = 'Year';
    public $incrementing = false;
    public $timestamps = false;
    protected $connection = 'pacsys';
}
