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
            <th>작성일자</th>
          </tr>
        </thead>
        <tbody>
          @foreach($bdata as $bdata)
          <tr>
            <td>{{ $bdata['headline'] }}</td>
            <td>{{ $bdata['writer'] }}</td>
            <td>{{ $bdata['vote_id'] }}</td>
            <td>{{ $bdata['created_at'] }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="board_container">
          <a href="{{ URL::route('postBoard') }}">글쓰기</a>
      </div>
      <div class="button_block"><a href="">1</a></div>
      <div class="button_block"><a href="">2</a></div>
      <div class="button_block"><a href="">3</a></div>
      <div class="button_block"><a href="">4</a></div>
      <div class="button_block"><a href="">5</a></div>
      <div class="button_block"><a href="">6</a></div>
      <div class="button_block"><a href="">7</a></div>
      <div class="button_block"><a href="">8</a></div>
      <div class="button_block"><a href="">9</a></div>
      <div class="button_block"><a href="">10</a></div>
    </div>
    <div class="board_container">

    </div>
    <div class="">
        <div class="content_block"><p><a href="/board/a">A동</a></p></div>
        <div class="content_block"><p><a href="/board/b">B동</a></p></div>
        <div class="content_block"><p><a href="/board/c">C동</a></p></div>
    </div>
@endsection
