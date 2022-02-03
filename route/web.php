<?php

use Xcholars\Support\Proxies\Route;

use Xcholars\Support\Proxies\RouteGroup as Group;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

Group::middleware('auth')->members(function ()
{
    //signup
    Route::view('/signup', 'auth/signup');

    Route::post('/signup', 'SignupController@create');

    //signin
    Route::view('/signin', 'auth/signin');

    Route::post('/signin', 'LoginController@authenticate');

    //forgotPassword
    Route::view('/forgotPassword', 'auth/forgotPassword');

    Route::post('/forgotPassword', 'forgotPasswordController@verify');

    //resetCode
    Route::view('/confirmResetCode', 'auth/confirmResetCode');

    Route::post('/confirmResetCode', 'ResetPasswordController@verifyResetCode');

    //resetPassword
    Route::view('/resetPassword', 'auth/resetPassword');

    Route::post('/resetPassword', 'ResetPasswordController@reset');
});

Group::middleware('guest')->members(function ()
{
    Route::get('/', 'HomeController@show');

    Route::get('/home', 'HomeController@show');

    // groups
    Route::view('/create_group', 'user/create_group');

    Route::post('/create_group', 'GroupsController@create');

    Route::get('/groups', 'GroupsController@show');

    Route::get('/delete_group/{id}', 'GroupsController@delete');

    // Questions
    Route::get('/group_questions/{id}', 'QuestionsController@show');

    Route::get('/ask_question/{id}', 'QuestionsController@ask');

    Route::post('/ask_question', 'QuestionsController@create');

    Route::get('/question_answers/{question_id?}', 'AnswersController@show');

    Route::get('/delete_question/{id}', 'QuestionsController@delete');

    // Answers
    Route::get('/answer_question/{question_id}', 'QuestionsController@show');

    Route::post('/answer_question', 'AnswersController@create');

    Route::get('/delete_answer/{question_id}/{answer_id}', 'AnswersController@delete');

    // profile
    Route::get('/profile/{id?}', 'profileController@show');

    Route::post('/delete_profile/{id}', 'profileController@delete');

    Route::post('/update', 'ProfileController@update');
    // sign Out
    Route::get('/logout', 'LogoutController@logout');

    Route::post('/logout', 'LogoutController@logout');

    Route::get('/support', 'SettingsController@show');

    Route::get('/about_us', 'SettingsController@about_us');

    // admin
    Group::prefix('admin')->middleware('admin')->members(function ()
    {
        Route::get('/dashboard', 'DashboardController@show');

        Route::get('/groups', 'GroupsController@show');

        Route::get('/users', 'profileController@show');

        Route::get('/settings', 'SettingsController@show');

        Route::post('/add_settings', 'SettingsController@update');
    });
});


Route::fallback(function (Response $response)
{
    return $response->withView('404');
});
