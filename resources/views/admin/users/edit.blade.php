@extends('users')
@section('title' , 'Edit')
@section('contents')
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
      
        <form action="{{ route('users.update')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>name</label>
                <input type="hidden" value="{{ $user ['id'] }}" name="id">
                <input type="text" class="form-control"  name="name" value="{{ $user ['name'] }}">
            </div>
            <div class="form-group">
                <label>birthday</label>
                <input type="text" class="form-control" name="birthday" value="{{ $user ['birthday'] }}">
            </div>
            <div class="form-group">
                <label>phone</label>
                <input type="text" class="form-control" name="phone" value="{{ $user ['phone'] }}">
            </div>

            <div class="form-group">
                <label>email</label>
                <input type="text" class="form-control" name="email" value="{{ $user ['email'] }}">
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="text" class="form-control" name="password" value="{{ $user ['password'] }}">
            </div>
            <div class="form-group">
                <label >Role</label>
                <input type="text" class="form-control" name="role" value="{{ $user ['role'] }}">
            </div>
            <div class="form-group">
                <label >Is_active</label>
                <input type="text" class="form-control" name="is_active" value="{{ $user ['is_active'] }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
</div>
@endsection