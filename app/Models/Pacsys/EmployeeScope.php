<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EmployeeScope
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $name
 * @property string $pin
 * @property string|null $scope
 *
 * @package App\Models
 */
class EmployeeScope extends Model
{
    protected $table = 'employee_scopes';
    public $incrementing = false;
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'id' => 'int'
    ];

    protected $fillable = [
        'id',
        'code',
        'name',
        'pin',
        'scope'
    ];
}
