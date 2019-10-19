@extends('layouts')

@section('title', 'Categories')

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
    <a href="{{ route('categories.create') }}" class="btn btn-success">Create</a>
    @if(empty($categories))
        <p>No Data</p>
    @else
        <table class="table">
            <thead>
                <th>ID</th>
                <th>User_id </th>
                <th>Name</th>
                
            </thead>
            <tbody>
                @foreach($categories as $item)
                    <tr>  
                    <td>{{ $item ['id'] }}</td>
                        <td>{{ $item ['user_id'] }}</td>
                        <td>{{ $item ['name'] }}</td>
                        
                        <td><a href="{{route('categories.edit',$item ['id'])}}" class="btn btn-primary">Update</a></td>
                        <td>
                          <form action="{{route('categories.destroy',$item ['id'])}}" method="POST">
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