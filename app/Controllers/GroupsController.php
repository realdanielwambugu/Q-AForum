<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

use App\Models\Group;

class GroupsController extends Controller
{
    use \App\Traits\HasValidation;

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'group'))
        {
            return $error;
        }

        $request->post->set('user_id', Auth::id());

        Group::create(
            array_merge(
                $request->all(),
                ['icon' => Group::upload_photo()]
            )
        );

        return $response->withSuccess('Success: Group Created');
    }

    public function show(Request $request, Response $response)
    {
        if (!auth()->user()->isAdmin())
        {
            return $response->withView(
                'user/groups',
                ['groups' => Group::all()]
            );
        }

        return $response->withView(
            'admin/groups',
            ['groups' => Group::all()]
        );
    }

    public function delete(Request $request, Response $response)
    {
        Group::find($request->id)->delete();

        return $response->withRedirect('/groups');
    }

}
