@extends('layouts.admin')
 
@section('title')
  <title>Homepage</title>
@endsection
 
@section('content')
<!-- content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.admin_partials.content-header', ['name' => 'Menus', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('menus.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="inputCategories" class="form-label">Tên menu</label>
                            <input type="text" class="form-control" placeholder="Nhập tên menu" name="name">
                        </div>
                        <div class="form-group">
                        <label for="inputCategories" class="form-label">Tên menu cha</label>
                            <select class="form-select mb-3" name="parent_id" aria-label=".form-select-lg example">
                                <option selected>Chọn menu cha</option>
                                {{!! $optionSelect !!}}
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- end content wrapper -->
@endsection
