@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $pageTitle }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">{{ $pageTitle }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <a href="{{ route('admin.tag.create') }}" role="button" class="btn bg-gradient-danger btn-sm">Новый тэг</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Название</th>
                                        <th style="width: 40px">View</th>
                                        <th style="width: 40px">Edit</th>
                                        <th style="width: 40px">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tags as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td><a href="{{ route('admin.tag.show', $item->id) }}">{{ $item->name }}</a></td>
                                        <td><a href="{{ route('admin.tag.show', $item->id) }}"><span class="badge bg-info">View</span></a></td>
                                        <td><a href="{{ route('admin.tag.edit', $item->id) }}"><span class="badge bg-warning">Edit</span></a></td>
                                        <td>
                                            <form action="{{ route('admin.tag.delete', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-transparent border-0 pt-0"><span class="badge bg-danger">Delete</span></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
