@extends('layouts.admin')

@section('title', 'Settings')
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Settings </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Settings</li>
            </ol>
        </nav>
    </div>
    <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail2">Detail</label>
                    <textarea class="form-control" id='detail' name="detail">
                        {{$data->detail}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Keywords</label>
                    <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">description</label>
                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">company</label>
                    <input type="text" class="form-control" name="company" value="{{$data->company}}">
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </form>
@endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(function() {
            $('#detail').summernote()
        })
    </script>
@endsection
