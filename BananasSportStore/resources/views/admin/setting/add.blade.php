@extends('layouts.admin')
 
@section('title')
  <title>Setting</title>
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- <link rel="stylesheet" href="{{ asset('admins/product/add.css') }}"> -->
@endsection



@section('content')
<!-- content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.admin_partials.content-header', ['name' => 'Setting', 'key' => 'Add'])
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
    <form action="{{ route('settings.store') . '?type=' . request()->type }}" method="POST" enctype="multipart/form-data">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        @csrf
                        <div class="form-group">
                            <label for="inputSetting" class="form-label">Config key</label>
                            <input type="text" class="form-control @error('config_key') is-invalid @enderror" placeholder="Nhập tên config key"
                            name="config_key"
                            value="{{ old('config_key') }}">
                            @error('config_key')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        @if(request()->type === 'Text')
                            <div class="form-group">
                                <label for="inputSettingValue" class="form-label">Config value</label>
                                <input type="text" class="form-control @error('config_value') is-invalid @enderror" placeholder="Nhập giá trị của config key"
                                name="config_value"
                                value="{{ old('config_value') }}">
                                @error('config_value')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        @elseif(request()->type === 'Textarea')
                            <div class="form-group">
                                <label for="inputSettingValue" class="form-label">Config value</label>
                                <textarea class="form-control @error('config_value') is-invalid @enderror"
                                placeholder="Nhập giá trị của config key"
                                name="config_value"
                                value="{{ old('config_value') }}"
                                rows="5"></textarea>
                                @error('config_value')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        @endif
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