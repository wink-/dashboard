<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Validation
 *
 * @property int $ID
 * @property string|null $ValidationText
 *
 * @package App\Models
 */
class Validation extends Model
{
    protected $table = 'Validation';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $fillable = [
        'ValidationText'
    ];
}
