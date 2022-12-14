@extends('layouts.admin')
 
@section('title')
  <title>Homepage</title>
@endsection

@section('js')
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('admins/main.js') }}"></script>
@endsection

@section('content')
<!-- content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.admin_partials.content-header', ['name' => 'Menus', 'key' => 'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <a href="{{ route('menus.create') }} " class="btn btn-success float-right m-2">Add</a>
          </div>
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tên menu</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($menus as $menu)
                    <tr>
                    <th scope="row">{{ $menu-> id }}</th>
                    <td>{{ $menu->name }}</td>
                    <td>
                        <a href="{{ route('menus.edit', ['id' => $menu->id]) }}" class="btn btn-primary">Edit</a>
                        <a href="" data-url= "{{ route('menus.delete', ['id' => $menu->id]) }}" class="btn btn-danger action-delete">Delete</a>
                    </td>
                    </tr>
                    @endforeach
              </tbody>
            </table>
          </div>
          <div class="col-md-12 text-center">
            {{ $menus->links() }}
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
<!-- end content wrapper -->
@endsection
