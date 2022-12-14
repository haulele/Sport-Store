@extends('layouts.admin')
 
@section('title')
  <title>Adminpage</title>
@endsection

@section('js')
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('admins/main.js') }}"></script>
@endsection

@section('content')
<!-- content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.admin_partials.content-header', ['name' => 'Category', 'key' => 'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <a href="{{ route('categories.create') }}" class="btn btn-success float-right m-2">Add</a>
          </div>
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tên danh mục</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($categories as $category)
                <tr>
                  <th scope="row">{{ $category-> id }}</th>
                  <td>{{ $category->name }}</td>
                  <td>
                    <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-primary">Edit</a>
                    <a href="" data-url="{{ route('categories.delete', ['id' => $category->id]) }}" class="btn btn-danger action-delete">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="col-md-12 text-center">
            {{ $categories->links() }}
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
<!-- end content wrapper -->
@endsection
