@extends('layouts')
@section('title' , 'home | page')

@section('contents')
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

    <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <h3>{{count($users)}}</h3>
              <p>Người Dùng</p>
            </div>
            <div class="icon" >
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{route('users.index')}}" class="small-box-footer">Thêm<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{count($categories)}}</h3>

              <p>Danh Mục</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('categories.index')}}" class="small-box-footer">Thêm<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{count($posts)}}</h3>

              <p>Bài Viết</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i> 
            </div>
            <a href="{{route('posts.index')}}" class="small-box-footer">Thêm<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{count($comments)}}</h3>

              <p>Comments</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{route('comments.index')}}" class="small-box-footer">Thêm<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      
    </section>
    <!-- /.content -->
  </div>
@endsection