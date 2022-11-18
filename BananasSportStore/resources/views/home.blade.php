@extends('layouts.admin')
 
@section('title')
  <title>Homepage</title>
@endsection
 
@section('content')
<!-- content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Home', 'key' => 'home'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            Trang chủ
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
<!-- end content wrapper -->
@endsection
