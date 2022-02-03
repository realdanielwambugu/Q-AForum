<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Group;

class HomeController
{
   public function show(Request $request, Response $response)
   {
       if (!auth()->user()->isAdmin())
       {
           return $response->withView(
               'user/groups',
               ['groups' => Group::all()]
           );
       }

       return $response->withRedirect('/admin/dashboard');
   }

}
