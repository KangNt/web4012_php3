@extends('layouts')

@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
        <!-- <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div>
                <label>id</label>
                <input type="text" name="id"/>
            </div>
            <div>
                <label>user_id</label>
                <input type="text" name="user_id"/>
            </div>

            <div>
                <label>Name</label>
                <input type="text" name="name"/>
            </div>
            
            <button type="submit">Submit</button>
        </form> -->
        <form action="{{ route('categories.store') }}" method="POST" role="form">
        <legend>New categories</legend>
        {{ csrf_field()}}
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" name="id" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">User_id</label>
            <input type="text" name="user_id" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" id="" placeholder="Input field">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </section>
  </div>

@endsection