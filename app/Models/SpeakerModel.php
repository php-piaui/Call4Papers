<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpeakerModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'photo',
        'company',
        'bio',
        'website',
        'linkedin',
        'twitter',
        'github',
        'professional_experiences',
    ];

    public function submissions()
    {
        return $this->hasMany(SubmissionModel::class, 'id', 'speaker_id');
    }
}
