@extends('layouts.admin')
 
@section('title')
  <title>Adminpage</title>
@endsection
 
@section('content')
<!-- content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.admin_partials.content-header', ['name' => 'category', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="inputCategories" class="form-label">Tên danh mục</label>
                            <input type="text" class="form-control" placeholder="Nhập tên danh mục" name="name" aria-describedby="Categories">
                        </div>
                        <div class="form-group">
                            <label for="inputCategories" class="form-label">Tên danh mục cha</label>
                            <select class="form-select mb-3" name="parent_id" aria-label=".form-select-lg example">
                                <option selected>Chọn danh mục cha</option>
                                {{!! $htmlOption !!}}
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
