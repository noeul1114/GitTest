<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Board;
use App\Comment;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($sort_board = 'a')
    {
      $ma = Board::count();
      $md = Board::max('vote_id');
      $bdata = Board::where('sort_board', 'like', $sort_board)->paginate(5);
      $targue = Board::find($md);

      $total = ['maxname' => $ma,
                'maxdescribe' => $md,
      ];

      //뷰에 전달
      return view('board')->with('total', $total)
                          ->with('bdata', $bdata)
                          ->with('targue', $targue);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function boardView()
    {
        return view('postview');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postBoard(Request $request)
    {
      $post = new Board;

      $post->headline = Input::get('headline');
      $post->description = Input::get('description');
      $post->sort_board = Input::get('sort_board');
      $post->writer = Auth::user()->name;

      $post->save();

      return redirect()->route('boardView');
//        return '글을 포스팅하는 화면입니다';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function voteBoard($sort_board, $id)
    {

        if (Auth::check()) {
        Board::where('id', $id)
                    ->increment('up');

        return redirect()->route('articleView', [$sort_board, $id] );
      }
       else {
         //Throw error and redirect to login interface
        return redirect()->route('login');
      }
    }

    public function articleView($sort_board, $id)
    {
      $ma = Board::count();
      $md = Board::max('vote_id');
      $bdata = Board::where('sort_board', 'like', $sort_board)->paginate(5);
      $targue = Board::find($md);
      $adata = Board::where('id', '=', $id)->first();
      $cdataup = Comment::where('board_id', 'like', $id)
                      ->where('distinction', 'like', '1')
                      ->get();
      $cdatadown = Comment::where('board_id', 'like', $id)
                      ->where('distinction', 'like', '2')
                      ->get();
      $cdataneut = Comment::where('board_id', 'like', $id)
                      ->where('distinction', 'like', '3')
                      ->get();

      $total = ['maxname' => $ma,
                'maxdescribe' => $md,
      ];

      //뷰에 전달
      return view('article')->with('total', $total)
                          ->with('bdata', $bdata)
                          ->with('targue', $targue)
                          ->with('adata', $adata)
                          ->with('cdataup', $cdataup)
                          ->with('cdatadown', $cdatadown)
                          ->with('cdataneut', $cdataneut);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
