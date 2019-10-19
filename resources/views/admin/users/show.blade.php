@extends('layouts')

@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">

        <form action="{{ route('users.show') }}" method="POST" role="form">
        <legend>Show</legend>
        {{ csrf_field()}}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Birthday</label>
            <input type="date" name="birthday" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" name="address" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="number" name="phone" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Role</label>
            <input type="text" name="role" class="form-control" id="" placeholder="Input field">
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