<?php

namespace App\Models\Pacsys;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Record
 *
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $FormHeader
 * @property string|null $AnalysisProcedure
 * @property string|null $FormName
 * @property string|null $FormDescription
 * @property string|null $FormRevision
 * @property string|null $FormType
 * @property string|null $ScopeName
 * @property int $ImageID
 * @property float|null $Capacity
 *
 * @package App\Models
 */
class Record extends Model
{
    protected $table = 'Records';
    public $incrementing = false;
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'ImageID' => 'int',
        'Capacity' => 'float'
    ];

    protected $fillable = [
        'Name',
        'Description',
        'FormHeader',
        'AnalysisProcedure',
        'FormName',
        'FormDescription',
        'FormRevision',
        'FormType',
        'ScopeName',
        'ImageID',
        'Capacity'
    ];
}
