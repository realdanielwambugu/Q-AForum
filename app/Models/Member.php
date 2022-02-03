<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Member extends Model
{
    protected $fillable = [
        'user_id',
        'group_id',
    ];


}
