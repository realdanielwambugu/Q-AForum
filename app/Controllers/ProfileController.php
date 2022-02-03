<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

use App\Models\User;

class ProfileController extends Controller
{
    use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
        if (!auth()->user()->isAdmin())
        {
            return $response->withView(
                'user/profile', ['user' => User::find(auth()->id())]
            );
        }

        return $response->withView(
            'admin/users', ['users' => User::all()]
        );
    }

    public function update(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'userUpdate'))
        {
            return $error;
        }

        User::find(auth()->id())->update($request->except('confirmPassword'));

        return $response->withSuccess('Profile updated succesfully');
    }



}
