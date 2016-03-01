<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TodayComment;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class TodayCommentController extends Controller
{

    public function index()
    {
        $topVote = TodayComment::max('vote');
        $bdata = TodayComment::all();
        $targue = TodayComment::find($topVote);

        //뷰에 전달
        return view('commenttoday')->with('targue', $targue)
                                   ->with('bdata', $bdata);
    }

    public function postComment(Request $request)
    {
      $post = new TodayComment;

      $post->name = Input::get('name');

      $post->save();

      return redirect()->route('todayComment');
//        return '글을 포스팅하는 화면입니다';
    }

    public function viewCommentPost()
    {
        return view('postCommentView');
    }

    public function voteComment($id)
    {
      TodayComment::where('id', $id)
                         ->increment('vote');

      return redirect()->route('todayComment');

    }
}
