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
      
        <form action="{{ route('posts.update')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="hidden" value="{{ $post ['id'] }}" name="id">
                <input type="text" class="form-control"  name="title" value="{{ $post ['title'] }}">
            </div>
            <div class="form-group">
                <label>Content</label>
                <input type="text" class="form-control" name="content" value="{{ $post ['content'] }}">
            </div>
            <div class="form-group">
                <label>Category_id</label>
                <input type="text" class="form-control" name="category_id" value="{{ $post ['category_id'] }}">
            </div>

            <div class="form-group">
                <label>User_id</label>
                <input type="text" class="form-control" name="user_id" value="{{ $post ['user_id'] }}">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
</div>
@endsection