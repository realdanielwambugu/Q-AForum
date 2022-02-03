<?php

Namespace App\providers;

use Xcholars\Validation\ValidationServiceProvider as ServiceProvider;


class ValidationServiceProvider extends ServiceProvider
{
   /**
    * The Validation rules mappings for the application.
    *
    * @var array
    */
    protected $mappings = [
        'signup' => \App\Validation\ForSignup::class,
        'login' => \App\Validation\ForLogin::class,
        'question' => \App\Validation\ForQuestion::class,
        'answer' => \App\Validation\ForAnswer::class,
        'group' => \App\Validation\ForGroup::class,
        'settings' => \App\Validation\ForSettings::class,
        'userUpdate' => \App\Validation\ForUserUpdate::class,
    ];
}
