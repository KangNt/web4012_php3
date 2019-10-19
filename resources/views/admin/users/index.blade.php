@extends('layouts')

@section('title', 'Users')

@section('contents')
<!-- Code -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <a href="{{ route('users.create') }}" class="btn btn-success">Create</a>
    @if(empty($users))
        <p>No Data</p>
    @else
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Birthday</th>
                <th>Role</th>
                <th>Is_active</th>
                <th>Post</th>
            </thead>
            <tbody>
                @foreach($users as $item)
                    <tr>  
                    <td>{{ $item ['id'] }}</td>
                        <td>{{ $item ['name'] }}</td>
                        <td>{{ $item ['email'] }}</td>
                        <td>{{ $item ['password'] }}</td>
                        <td>{{ $item ['birthday'] }}</td>
                        <td>{{ $item ['role'] }}</td>
                        <td>{{ $item ['is_active'] }}</td>
                        <td><a href="{{route('users.edit',$item ['id'])}}" class="btn btn-primary">Update</a></td>
                        <td><a href="{{route('users.show',$item ['id'])}}" class="btn btn-info">Show</a></td>
                        <td>
                          <form action="{{route('users.destroy',$item ['id'])}}" method="POST">
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger">
                          </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <!-- /.content -->
    </section> 
  </div>
  <!-- /.content-wrapper -->
@endsection