<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Board;

class IntroductionController extends Controller
{
    public function index()
    {

        return view('Intro');

    }

}
