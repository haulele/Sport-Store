@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('css')
    <!-- <link rel="stylesheet" href="{{ asset('admins/slider/index.css') }}"> -->
@endsection

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admins/main.js') }}"></script>
@endsection


@section('content')

    <div class="content-wrapper">
        @include('partials.admin_partials.content-header', ['name' => 'Role', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="" class="btn btn-success float-right m-2"> Add</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên vai trò</th>
                                <th scope="col">Mô tả vai trò</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($roles as $role)

                                <tr>
                                    <th scope="row">{{ $role->id }}</th>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->display_name }}</td>
                                    <td>
                                        <a href=""
                                           class="btn btn-primary">Edit</a>
                                        <a href=""
                                           data-url=""
                                           class="btn btn-danger action-delete">Delete</a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $roles->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection

