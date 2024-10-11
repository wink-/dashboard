<?php

namespace App\Models\Pacsys;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AnalysisDate
 *
 * @property Carbon|null $AnalysisDate
 *
 * @package App\Models
 */
class AnalysisDate extends Model
{
    protected $table = 'AnalysisDates';
    public $incrementing = false;
    public $timestamps = false;
    protected $connection = 'pacsys';
    protected $casts = [
        'AnalysisDate' => 'datetime'
    ];

    protected $fillable = [
        'AnalysisDate'
    ];
}
