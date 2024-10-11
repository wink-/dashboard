<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Form
 *
 * @property int $ID
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $FormType
 * @property Carbon $TimeStamp
 * @property bool|null $Archived
 * @property string|null $Revision
 * @property string|null $AnalysisProcedure
 *
 * @package App\Models
 */
class Form extends Model
{
    protected $table = 'Form';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'TimeStamp' => 'datetime',
        'Archived' => 'bool'
    ];

    protected $fillable = [
        'Name',
        'Description',
        'FormType',
        'TimeStamp',
        'Archived',
        'Revision',
        'AnalysisProcedure'
    ];
}
