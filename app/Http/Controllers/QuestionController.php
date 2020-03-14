<?php

namespace App\Http\Controllers;

use App\Http\Resources\QuestionResourceCollection;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return new QuestionResourceCollection($questions);
    }
}
