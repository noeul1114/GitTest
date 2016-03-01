@extends('layouts.master')

@section('title')
    세이프로젝트
@endsection

@section('content')

        <!-- New Task Form -->
        <form action="postComment" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="headline" class="col-sm-3 control-label">한마디</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control">
                </div>
            </div>


            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> 작성완료
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
