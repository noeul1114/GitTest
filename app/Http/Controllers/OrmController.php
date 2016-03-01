<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Board;

class OrmController extends Controller
{
  public function index()
  {
    //
    $test = Board::all();
    //뷰에 전달
    return $test;
  }
}
