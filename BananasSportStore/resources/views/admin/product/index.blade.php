@extends('layouts.admin')
 
@section('title')
  <title>Add product</title>
@endsection
 
@section('css')
  <link rel="stylesheet" href="{{ asset('admins/product/image.css') }}">
@endsection

@section('js')
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('admins/main.js') }}"></script>
@endsection

@section('content')
<!-- content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.admin_partials.content-header', ['name' => 'Product', 'key' => 'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <a href="{{ route('product.create') }}" class="btn btn-success float-right m-2">Add</a>
          </div>
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tên sản phẩm</th>
                  <th scope="col">Giá</th>
                  <th scope="col">Hình ảnh</th>
                  <th scope="col">Danh mục</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach($products as $productItem)
                <tr>
                  <th scope="row">{{ $productItem->id }}</th>
                  <td>{{ $productItem->name }}</td>
                  <td>{{ number_format($productItem->price) }} đ</td>
                  <td><img class="product-img" src="{{ $productItem->feature_image_path }}" alt=""></td>
                  <td>{{ optional($productItem->category)->name }}</td>
                  <td>
                    <a href="{{ route('product.edit', ['id' => $productItem->id]) }}" class="btn btn-primary">Edit</a>
                    <a href="" data-url = "{{ route('product.delete', ['id' => $productItem->id]) }}" class="btn btn-danger action-delete">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <div class="col-md-12 text-center">
            {{ $products->links() }}
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
<!-- end content wrapper -->
@endsection
