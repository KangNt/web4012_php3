@extends('layouts')

@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
        <!-- <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <div>
                <label>Id</label>
                <input type="text" name="id"/>
            </div>
            <div>
                <label>post_id</label>
                <input type="text" name="post_id"/>
            </div>

            <div>
                <label>Content</label>
                <input type="text" name="content"/>
            </div>
            <div>
                <label>user_id</label>
                <input type="text" name="user_id"/>
            </div>
            <div>
                <label>is_active</label>
                <input type="text" name="is_active"/>
            </div>
            
            <button type="submit">Submit</button>
        </form> -->
        <form action="{{ route('comments.store') }}" method="POST" role="form">
        <legend>New Comments</legend>
        {{ csrf_field()}}
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" name="id" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Post_id</label>
            <input type="text" name="post_id" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Content</label>
            <input type="text" name="content" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">user_id</label>
            <input type="text" name="user_id" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Is_active</label>
            <input type="text" name="is_active" class="form-control" id="" placeholder="Input field">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </section>
  </div>

@endsection