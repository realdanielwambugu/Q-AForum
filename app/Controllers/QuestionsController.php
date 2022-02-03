<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

use App\Models\Question;

use App\Models\Answer;

use App\Models\Group;

class QuestionsController extends Controller
{
    use \App\Traits\HasValidation;

    public function ask(Request $request, Response $response)
    {
        return $response->withView(
            'user/ask_question', ['group_id'=> $request->id]
        );
    }

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'question'))
        {
            return $error;
        }

        $request->post->set('user_id', Auth::id());

        Question::create($request->all());

        return $response->withAjaxRedirect("/group_questions/{$request->group_id}");
    }

    public function show(Request $request, Response $response)
    {
        if ($id = $request->question_id)
        {
            return $response->withView(
                'user/answer_question',
                [
                    'question' => Question::find($id),
                ]
            );
        }

        $group = Group::find($request->id);

        return $response->withView(
            'user/questions',
            [
                'group' => $group,
                'title' => 'Questions',
            ]
        );

    }

    public function delete(Request $request, Response $response)
    {
        $question = Question::find($request->id);

        foreach ($question->answer  as $answer)
        {
           $answer->delete();
        }

        $id = $question->group_id;

        $question->delete();

        return $response->withRedirect("/group_questions/{$id}");
    }
}
