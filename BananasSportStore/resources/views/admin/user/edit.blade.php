@extends('layouts.admin')
 
@section('title')
  <title>Homepage</title>
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- <link rel="stylesheet" href="{{ asset('admins/slider/add.css') }}"> -->
@endsection



@section('content')
<!-- content wrapper -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.admin_partials.content-header', ['name' => 'User', 'key' => 'Edit'])
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
    <form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        @csrf
                        <div class="form-group">
                            <label for="inputSliders" class="form-label">Tên user</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập tên user" name="name"
                            value="{{ $user->name }}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputUsersEmail" class="form-label">User email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Nhập user email" name="email"
                            value="{{ $user->email }}">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputUsersPassword" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Nhập password" name="password">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputRole" class="form-label">Chọn vai trò</label>
                            <select name="role_id[]" class="form-control" multiple>
                               @foreach($roles as $role)
                               <option
                                    {{ $rolesofUser->contains('id', $role->id) ? 'selected' : '' }}
                                    value="{{ $role->id }}">{{ $role->name }}</option>
                               @endforeach
                            </select>
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