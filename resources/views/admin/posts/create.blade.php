@extends('layouts')

@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
      
        <form action="{{ route('posts.store') }}" method="POST" role="form">
        <legend>New post</legend>
        {{ csrf_field()}}
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" name="id" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Content</label>
            <input type="text" name="content" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Category_id</label>
            <input type="text" name="category_id" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">user_id</label>
            <input type="text" name="user_id" class="form-control" id="" placeholder="Input field">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </section>
  </div>

@endsection