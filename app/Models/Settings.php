<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

use Xcholars\Storage\FileSystem;

class Settings extends Model
{
    protected $fillable = [
        'about_us',
        'phone',
        'website',
        'email',
    ];

}
