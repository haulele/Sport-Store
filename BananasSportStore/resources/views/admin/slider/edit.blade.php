@extends('layouts.admin')
 
@section('title')
  <title>Homepage</title>
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('admins/slider/image_edit.css') }}">
@endsection



@section('content')
<!-- content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.admin_partials.content-header', ['name' => 'Slider', 'key' => 'Edit'])
    <!-- /.content-header -->
    <!-- Main content -->
    <form action="{{route('slider.update', ['id' => $slider->id] )}}" method="POST" enctype="multipart/form-data">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        @csrf
                        <div class="form-group">
                            <label for="inputSliders" class="form-label">Tên slider</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập tên sản phẩm" name="name"
                            value="{{ $slider->name }}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputProductsDescription" class="form-label">Mô tả slider</label>
                            <textarea type="text" class="form-control @error('description') is-invalid @enderror" rows="4" name="description">{{$slider->description}}</textarea>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputSliderImage" class="form-label"></label>
                            <input type="file" class="form-control @error('image_path') is-invalid @enderror"
                            name="image_path">
                            <div class="col-6">
                                <div class="row">
                                    <img src="{{ $slider->image_path}}" alt="" class="slider_image">
                                </div>
                            </div>
                            @error('image_path')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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
<script src=""></script>
@endsection