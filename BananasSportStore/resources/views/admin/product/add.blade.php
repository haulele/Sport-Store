@extends('layouts.admin')
 
@section('title')
  <title>Homepage</title>
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection



@section('content')
<!-- content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Product', 'key' => 'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        @csrf
                        <div class="form-group">
                            <label for="inputProducts" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="name">
                        </div>

                        <div class="form-group">
                            <label for="inputProductsPrice" class="form-label">Giá sản phẩm</label>
                            <input type="text" class="form-control" placeholder="Nhập giá sản phẩm" name="price">
                        </div>

                        <div class="form-group">
                            <label for="inputProductsPicture" class="form-label">Hình ảnh sản phẩm</label>
                            <input type="file" class="form-control" name="feature_image_path">
                        </div>

                        <div class="form-group">
                            <label for="inputProductsDetailPictures" class="form-label">Hình ảnh chi tiết</label>
                            <input type="file" multiple class="form-control" name="image_path">
                        </div>

                        <div class="form-group">
                            <label for="inputCategories" class="form-label">Tên danh mục</label>
                            <select class="form-select mb-3" name="parent_id" aria-label=".form-select-lg example">
                                <option selected>Chọn danh mục</option>
                                {{!! $htmlOption !!}}
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="form-control tinymce_editor_init" name="content" style="height: 100px"></textarea>
                        </div>
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