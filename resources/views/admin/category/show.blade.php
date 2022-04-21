@extends('layouts.admin')

@section('title', 'Show Category '.$data->title)
@section('content')
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
                                <th> Id </th>
                                <th> Title </th>
                                <th> Keywords </th>
                                <th> Image </th>
                                <th> Status </th>
                                <th> Create Date </th>
                                <th> Updated Date </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    {{$data->id}}
                                </td>
                                <td> {{$data->title}} </td>
                                <td>
                                    {{$data->keywords}}
                                </td>
                                <td>  </td>
                                <td> {{$data->status}} </td>
                                <td> {{$data->created_at}} </td>
                                <td> {{$data->updated_at}} </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection

