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

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
    
    
    <h3 style="text-align: center">USERS</h3>
    <a href="{{ route('users.create') }}" class="btn btn-success">Create</a>
    @if(empty($users))
        <p>No Data</p>
    @else
        <table class="table">
            <thead>
              
                <th>Name</th>
                <th>Email</th>
                <th>Birthday</th>
                <th> Address </th>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>  
                      
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['birthday'] }}</td>
                        <td>{{ $user['address'] }}</td>
                        
                        <td><a href="{{ url('users/update',[ $user['id'] ]) }}" class="btn btn-primary">Update</a></td>
                        <td><input type="submit" value="Delete" class="btn btn-danger"></td>
                        <form action="{{ route('users.delete',[$user['id']] ) }}" method="POST">
                           @csrf
                      <input type="hidden" value="{{  $user['id'] }}">
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
  </div>
  <!-- /.content-wrapper -->
@endsection