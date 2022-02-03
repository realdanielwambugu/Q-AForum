<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Answer extends Model
{
    protected $fillable = [
        'user_id',
        'question_id',
        'answer',
        'image',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
