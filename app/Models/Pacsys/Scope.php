<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Scope
 *
 * @property string|null $ScopeName
 *
 * @package App\Models
 */
class Scope extends Model
{
    protected $table = 'Scopes';
    public $incrementing = false;
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $fillable = [
        'ScopeName'
    ];
}
