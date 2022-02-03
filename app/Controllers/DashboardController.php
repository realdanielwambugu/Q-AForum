<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Question;

use App\Models\User;

use App\Models\Group;

class DashboardController
{
   public function show(Request $request, Response $response)
   {
        return $response->withView(
          'admin/dashboard',
           [
               'users'     => User::count(),
               'groups'    => Group::count(),
               'Question' => Question::count(),
           ]
        );
   }

}
