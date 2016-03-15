@extends('layouts.master')

@section('title')
    세이프로젝트
@endsection

@section('content')
    <div class="board_container">
        <div class="title">{{ $targue['headline'] }}</div>
        <div class="content_block"><p>{{ $targue['description'] }}</p></div>
    </div>

    <div class="board_container">
      <table class="table">
        <thead>
          <tr>
            <th>제  목</th>
            <th>작성자</th>
            <th>투표수</th>
            <th>Vote</th>
            @if(Auth::check())
            <th>추천</th>
            @endif
            <th>작성일자</th>
          </tr>
        </thead>
        <tbody>
          @foreach($bdata as $item)
          <tr>
            <div>
            <td>{{ $item['headline'] }}</td>
            <td>{{ $item['writer'] }}</td>
            <td>{{ $item['up'] + $item['down'] + $item['neutral'] }}</td>
            <td>
              <div>찬 {{ $item['up'] }}</div>
              <div>반 {{ $item['down'] }}</div>
              <div>중 {{ $item['neutral'] }}</div>
            </td>
            @if(Auth::check())
            <td>
              <form action="{{ route('voteBoard', $item->id) }}" method="POST" class="form-horizontal">
              {{ csrf_field() }}
              <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                  <i class="fa fa-plus"></i> 추천
                </button>
              </div>
            </td>
            @endif
            <td>{{ $item['created_at'] }}</td>
          </div>
          </tr>
          <tr>
            <td>
              <div class='box_up'></div>
              <div class='box_down'></div>
              <div class='box_neutral'></div>
            </td>
          </tr>
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
