@extends('layouts.admin')

@section('title', 'Edit Category :'.$data->title)
@section('content')
        <h1>Edit Category {{$data->title}}</h1>
        <div class="card-body">
            <h4 class="card-title">Basic form elements</h4>
            <p class="card-description"> Basic form elements </p>
            <form class="forms-sample" action="{{route ('admin.category.update',['id'=>$data->id])}}}" method="post">
                @csrf
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
                    <label>image upload</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Update</button>
                <a href="{{route ('admin.index')}}">Cancel</a <button class="btn btn-dark"></button>
            </form>
        </div>
@endsection

