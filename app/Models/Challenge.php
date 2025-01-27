<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    protected $table = 'challenge';
    protected $fillable = [
        'admin_id',
        'challenge_description',
        'challenge_name',
        'challenge_start_date',
        'challenge__date',
        'duration',
        'wrong_answer_marks',
        'blank_answer_marks',
        'questions_to_answer',
    ];
    public function questions()
{
    return $this->hasMany(Question::class);
}

public function answers()
{
    return $this->hasMany(Answer::class);
}

    // Add any other necessary properties or relationships
}