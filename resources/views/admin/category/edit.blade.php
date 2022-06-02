@extends('layouts.admin')

@section('title', 'Edit Category :'.$data->title)
@section('content')
    <div class="page-header">
        <h3 class="page-title"> Chart-js </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Charts</a></li>
                <li class="breadcrumb-item active" aria-current="page">Chart-js</li>
            </ol>
        </nav>
    </div>
        <h1>Edit Category {{$data->title}}</h1>
        <div class="card-body">
            <form class="forms-sample" action="{{route ('admin.category.update',['id'=>$data->id])}}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >Parent Category</label>
                    <select class="form-control" name="parent_id" >
                        <option value="0" selected="selected">Main Category</option>
                        @foreach($datalist as $rs)
                            <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif>
                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
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
                    <label for="exampleSelectGender">Status</label>
                    <select class="form-control" name="status">
                        <option selected>{{$data->status}}</option>
                        <option>True</option>
                        <option>False</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="image" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="file" class="form-control file-upload-info" name="image" placeholder="upload image">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Update</button>
                <a href="{{route ('admin.category.index')}}">Cancel</a <button class="btn btn-dark"></button>
            </form>
        </div>
@endsection

