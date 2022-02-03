<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Settings;

class SettingsController extends Controller
{
    use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
         $settings = Settings::find(1);

         $view = 'admin/settings';

         if (!auth()->user()->isAdmin())
         {
             $view = 'user/support';
         }

         return $response->withView(
             $view, ['settings' => $settings]
         );
    }

    public function about_us(Request $request, Response $response)
    {
         $settings = Settings::find(1);

         return $response->withView(
             'user/about_us', ['settings' => $settings]
         );
    }

   public function update(Request $request, Response $response)
   {
       if ($error = $this->isInvalid($request, 'settings'))
       {
           return $error;
       }

       Settings::find($request->id)->update($request->except('id'));

       return $response->withSuccess('Settings updated succesfully');
   }

}
