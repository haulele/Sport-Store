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
        @include('partials.content-header', ['name' => 'Setting', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dropdown mb-3">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Add Setting
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('settings.create') . '?type=Text'}}">Text</a></li>
                                <li><a class="dropdown-item" href="{{ route('settings.create') . '?type=Textarea'}}">Text area</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Config key</th>
                                <th scope="col">Config value</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($settings as $settingItem)
                                    <tr>
                                        <th scope="row">{{ $settingItem->id }}</th>
                                        <td>{{ $settingItem->config_key }}</td>
                                        <td>{{ $settingItem->config_value }} </td>
                                        <td>
                                            <a href="{{ route('settings.edit', ['id' => $settingItem->id ] ) . '?type=' . $settingItem->type }}" class="btn btn-primary">Edit</a>
                                            <a href="" data-url = "{{ route('settings.delete', ['id' => $settingItem->id]) }}" class="btn btn-danger action-delete">Delete</a>
                                        </td>
                                    </tr>      
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $settings->links() }}
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection

