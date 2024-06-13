<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmissionModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        'speaker_id',
    ];

    public function speaker()
    {
        return $this->belongsTo(SpeakerModel::class, 'speaker_id');
    }
}
