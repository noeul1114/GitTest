@extends('layouts.master')

@section('title')
    세이프로젝트
@endsection

@section('content')
    <div class="container">
        <div class="title">{{ $targue['name'] }}</div>

        <div class="block">

        </div>
        <table class="table">
          <thead>
            <tr>
              <th>제  목</th>
              <th>추천</th>
            </tr>
          </thead>
          <tbody>
            @foreach($bdata as $bdata)
            <tr>
              <td>{{ $bdata['name'] }}</td>
              <td>{{ $bdata['vote'] }}</td>
              <td>
                <form action="{{ route('voteComment', $bdata->id) }}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                <div class="col-sm-offset-3 col-sm-6">
                  <button type="submit" class="btn btn-default">
                      <i class="fa fa-plus"></i> 추천
                  </button>
                </div>
              </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button class="btn btn-default">
                    <i class="fa fa-plus"></i><a href="/postComment">한마디!</a>
                </button>
            </div>
        </div>
    </div>

@endsection
