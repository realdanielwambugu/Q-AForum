<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Question extends Model
{
    protected $fillable = [
        'user_id',
        'question',
        'group_id',
        'image',
    ];

    public function answer()
    {
        return $this->hasMany(Answer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
