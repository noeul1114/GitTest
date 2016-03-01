@extends('layouts.master')

@section('title')
    세이프로젝트
@endsection

@section('content')

        <!-- New Task Form -->
        <form action="postBoard" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="headline" class="col-sm-3 control-label">제목</label>

                <div class="col-sm-6">
                    <input type="text" name="headline" id="headline" class="form-control">
                </div>
            </div>
            <div class="container">
              <div class="radio">
            	  <label>
            	    <input type="radio" name="sort_board" id="sort_board" value="a">
            	    A동
            	  </label>
            	</div>
            	<div class="radio">
            	  <label>
            	    <input type="radio" name="sort_board" id="sort_board" value="b">
            	    B동
            	  </label>
            	</div>
            	<div class="radio disabled">
            	  <label>
            	    <input type="radio" name="sort_board" id="sort_board" value="c">
            	    C동
            	  </label>
            	</div>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-6 control-label">내용</label>

                <div class="col-sm-12">
                    <input type="text" name="description" id="description" class="form-control">
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
