<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property int $id
 * @property string|null $Code
 * @property string|null $userName
 * @property string|null $Name
 *
 * @package App\Models
 */
class Employee extends Model
{
    protected $table = 'Employee';
    public $incrementing = false;
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'id' => 'int'
    ];

    protected $fillable = [
        'id',
        'Code',
        'userName',
        'Name'
    ];
}
