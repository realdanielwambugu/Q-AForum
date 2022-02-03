<?php

Namespace App\Models;

use Xcholars\Storage\FileSystem;

use Xcholars\Database\Orm\Model;

class Group extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'icon',
    ];

    public function isAdmin()
    {
        return $this->type == 'admin';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function upload_photo()
    {
        $storage = new FileSystem(upload_path('group_icons'));

        $file = new \Upload\File('icon', $storage);

        $fileName = uniqid();

        $file->setName($fileName);

        $file->upload();

        return $file->getNameWithExtension();
    }
}
