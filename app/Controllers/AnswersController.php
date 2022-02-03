<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

use App\Models\Answer;

use App\Models\Question;

class AnswersController extends Controller
{
    use \App\Traits\HasValidation;

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'answer'))
        {
            return $error;
        }

        $request->post->set('user_id', Auth::id());

        Answer::create($request->all());

        return $response->withAjaxRedirect("/question_answers/{$request->question_id}");
    }

    public function show(Request $request, Response $response)
    {
        return $response->withView(
            'user/question_answers',
            ['question' => Question::find($request->question_id)]
        );

    }
    public function delete(Request $request, Response $response)
    {
        Answer::find($request->answer_id)->delete();

        return $response->withRedirect('question_answers/' . $request->question_id);
    }
}
