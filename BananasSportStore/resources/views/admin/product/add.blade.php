@extends('layouts.admin')
 
@section('title')
  <title>Homepage</title>
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('admins/product/add.css') }}">
@endsection



@section('content')
<!-- content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.admin_partials.content-header', ['name' => 'Product', 'key' => 'Add'])
    <!-- /.content-header -->
    <!-- <div class="col-md-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div> -->
    <!-- Main content -->
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        @csrf
                        <div class="form-group">
                            <label for="inputProducts" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập tên sản phẩm" name="name"
                            value="{{ old('name') }}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputProductsNumber" class="form-label">Số lượng sản phẩm</label>
                            <input type="text" class="form-control @error('number_product') is-invalid @enderror" placeholder="Nhập số lượng sản phẩm"
                            name="number_product"
                            value="{{ old('number_product') }}">
                            @error('number_product')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputProductsPrice" class="form-label">Giá sản phẩm</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Nhập giá sản phẩm" name="price"
                            value="{{ old('price') }}">
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputProductsPicture" class="form-label">Hình ảnh sản phẩm</label>
                            <input type="file" class="form-control" name="feature_image_path">
                        </div>

                        <div class="form-group">
                            <label for="inputProductsDetailPictures" class="form-label">Hình ảnh chi tiết</label>
                            <input type="file" multiple class="form-control" name="image_path[]">
                        </div>

                        <div class="form-group">
                            <label for="inputCategories" class="form-label">Tên danh mục</label>
                            <select class="form-select mb-3 @error('price') is-invalid @enderror" name="category_id" aria-label=".form-select-lg example">
                                <option value="">Chọn danh mục</option>
                                {{!! $htmlOption !!}}
                            </select>
                            @error('category_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control tinymce_editor_init @error('content') is-invalid @enderror" name="content" style="height: 100px">
                            {{ old('content') }}</textarea>
                        </div>
                        @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </form>
    <!-- /.content -->
</div>
<!-- end content wrapper -->
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.tiny.cloud/1/gr27ln33dlzzdkzagvdlbgjr2t8nyqn436hqhfudhhtbjpx2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="{{ asset('admins/product/add.js') }}"></script>
@endsection