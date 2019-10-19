@extends('users')
@section('title' , 'edit')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      
        <form action="{{ route('comments.update')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>id</label>
                <input type="hidden" value="{{ $categories ['id'] }}" name="id">
                <input type="text" class="form-control"  name="id" value="{{ $comments ['id'] }}">
            </div>
            <div class="form-group">
                <label>post_id</label>
                <input type="text" class="form-control" name="post_id" value="{{ $comments ['post_id'] }}">
            </div>
            <div class="form-group">
                <label>content</label>
                <input type="text" class="form-control" name="content" value="{{ $comments ['content'] }}">
            </div>
            <div class="form-group">
                <label>user_id</label>
                <input type="text" class="form-control" name="user_id" value="{{ $comments ['uesr_id'] }}">
            </div>
            <div class="form-group">
                <label>is_active</label>
                <input type="text" class="form-control" name="is_active" value="{{ $comments ['is_active'] }}">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
</div>
@endsection