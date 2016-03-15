@extends('layouts.master')

@section('title')
    세이프로젝트
@endsection

@section('content')
    <div class="board_container">
      <div class="title"><a href="{{ route('articleView',[$targue->sort_board, $targue->id]) }}">{{ $targue['headline'] }}</a></div>
        <div class="content_block"><p>{{ $targue['description'] }}</p></div>
    </div>

    <div class="board_container">
      <div class="title">{{ $adata['headline'] }}</div>
        <div class="content_block"><p>{{ $adata['description'] }}</p></div>
      <div class="">
        <div class="comment_block">
          <table class="table table-hover">
            <thead>
              <th>제목</th>
              <th>추천</th>
            </thead>
            <tbody>
              <tr>
                <td>testing</td>
                <td>testing</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="comment_block">
          <table class="table table-hover">
            <thead>
              <th>제목</th>
              <th>추천</th>
            </thead>
            <tbody>
              <tr>
                <td>testing</td>
                <td>testing</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="comment_block">
          <table class="table table-hover">
            <thead>
              <th>제목</th>
              <th>추천</th>
            </thead>
            <tbody>
              <tr>
                <td>testing</td>
                <td>testing</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="board_container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>제  목</th>
            <th>작성자</th>
            <th>투표수</th>
            <th>Vote</th>
            <th>추천</th>
            <th>작성일자</th>
          </tr>
        </thead>
        <tbody>
          @foreach($bdata as $item)
          <tr>
            <td><a href="{{ route('articleView', [$item->sort_board, $item->id]) }}">{{ $item['headline'] }}</a></td>
            <td>{{ $item['writer'] }}</td>
            <td>{{ $item['up'] + $item['down'] + $item['neutral'] }}</td>
            <td>
              <div>찬 {{ $item['up'] }}</div>
              <div>반 {{ $item['down'] }}</div>
              <div>중 {{ $item['neutral'] }}</div>
            </td>
            <td>
              <form action="{{ route('voteBoard', $item->id) }}" method="POST" class="form-horizontal">
              {{ csrf_field() }}
              <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                  <i class="fa fa-plus"></i> 추천
                </button>
              </div>
            </td>
            <td>{{ $item['created_at'] }}</td>
          </tr>
          <td colspan="6">
            <div class="board_box_up"></div>
            <div class="board_box_down"></div>
            <div class="board_box_neutral"></div>
          </td>
          @endforeach
        </tbody>
      </table>
      <div class="board_container">
          <a href="{{ URL::route('postBoard') }}">글쓰기</a>
      </div>
      {!! $bdata->render() !!}
    </div>
    <div class="board_container">

    </div>
    <div class="">
        <div class="content_block"><p><a href="/board/a">A동</a></p></div>
        <div class="content_block"><p><a href="/board/b">B동</a></p></div>
        <div class="content_block"><p><a href="/board/c">C동</a></p></div>
    </div>
@endsection
