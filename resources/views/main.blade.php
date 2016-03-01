@extends('layouts.master')

@section('title')
    세이프로젝트
@endsection

@section('content')
    <div class="container">
        <div class="title">Say::Project</div>
        <div class="">
            <div class="content_block"><p><a href="/board/a">A동</a></p></div>
            <div class="content_block"><p><a href="/board/b">B동</a></p></div>
            <div class="content_block"><p><a href="/board/c">C동</a></p></div>
            <div class=""><p>총 가입자 수 : {{ $uc }}</p></div>
        </div>
        <div class="block">

        </div>
        <div class="title">{{ $bdata['headline'] }}</div>
        <div class="content_block"><p>{{ $bdata['description'] }}</p></div>
    </div>

@endsection
