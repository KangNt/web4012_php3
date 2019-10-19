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
      
        <form action="{{ route('categories.update')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>user_id</label>
                <input type="hidden" value="{{ $categories ['id'] }}" name="id">
                <input type="text" class="form-control"  name="user_id" value="{{ $categories ['user_id'] }}">
            </div>
            <div class="form-group">
                <label>name</label>
                <input type="text" class="form-control" name="name" value="{{ $categories ['name'] }}">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
</div>
@endsection