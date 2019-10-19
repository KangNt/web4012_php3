@extends('layouts')

@section('title', 'Posts')

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
    <a href="{{ route('posts.create') }}" class="btn btn-success">Create</a>
    @if(empty($posts))
        <p>No Data</p>
    @else
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Category_id</th>
                <th>User_id</th>
               
            </thead>
            <tbody>
                @foreach($posts as $item)
                    <tr>  
                    <td>{{ $item ['id'] }}</td>
                        <td>{{ $item ['name'] }}</td>
                        <td>{{ $item ['title'] }}</td>
                        <td>{{ $item ['content'] }}</td>
                        <td>{{ $item ['category_id'] }}</td>
                        <td>{{ $item ['user_id'] }}</td>
                      
                        <td><a href="{{route('posts.edit',$item ['id'])}}" class="btn btn-primary">Update</a></td>
                        <td>
                          <form action="#" method="POST">
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