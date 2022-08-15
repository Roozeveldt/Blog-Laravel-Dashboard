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
                            <li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}">Тэги</a></li>
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
                                {{ $pageTitle }}
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th scope="row" style="width: 20%">ID</th>
                                            <td>{{ $tag->id }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%">Название</th>
                                            <td>{{ $tag->name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%">Кол-во постов, всего</th>
                                            <td>36</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" style="width: 20%">Кол-во постов, опубликовано</th>
                                            <td>29</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('admin.tag.edit', $tag->id) }}" role="button" class="btn bg-gradient-indigo btn-sm">Редактировать</a>
                                <form action="{{ route('admin.tag.delete', $tag->id) }}" method="post" class="float-right">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn bg-gradient-danger btn-sm">Удалить</button>
                                </form>
                            </div>
                        </div>
                        <div class="card card-purple card-outline">
                            <div class="card-header">
                                Посты с тэгом {{ $tag->name }}
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
{{--                                    TODO: вывести таблицу с постами с тэгом --}}
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
