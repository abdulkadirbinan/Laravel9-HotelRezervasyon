@extends('layouts.admin')

@section('title', 'Show Category '.$data->title)
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
        <h1>Show Category {{$data->title}}</h1>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{route ('admin.category.edit',['id'=>$data->id])}}"<button class="btn btn-primary">Edit</a></button>
                    <h4 class="card-title">Detail</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 200px"> Id </th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th> Title </th>
                                <td> {{$data->title}} </td>
                            </tr>
                            <tr>
                                <th> Keywords </th>
                                <td> {{$data->keywords}} </td>
                            </tr>
                            <tr>
                                <th> Description </th>
                                <td> {{$data->description}} </td>
                            </tr>
                            <tr>
                                <th> Image </th>
                                <td>     @if ($data->image)
                                        <img src="{{Storage::url($data->image)}}" style="height:40px">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th> Status </th>
                                <td> {{$data->status}} </td>
                            </tr>
                            <tr>
                                <th> Create Date </th>
                                <td> {{$data->created_at}} </td>
                            </tr>
                            <tr>
                                <th> Updated Date </th>
                                <td> {{$data->updated_at}} </td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection

