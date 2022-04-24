@extends('layouts.admin')

@section('title', 'Show Hotel '.$data->title)
@section('content')
        <h1>Show Hotel {{$data->title}}</h1>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{route ('admin.hotel.edit',['id'=>$data->id])}}"<button class="btn btn-primary">Edit</a></button>
                    <h4 class="card-title">Show Hotel</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 200px"> Id </th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th> Category </th>
                                <td>{{$data->category_id}}</td>
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
                                <th> description </th>
                                <td> {{$data->description}} </td>
                            </tr>

                            <tr>
                                <th> Star </th>
                            <td>{{$data->star}}</td>
                            </tr>
                            <tr>
                                <th> Address </th>
                                <td>{{$data->address}}</td>
                            </tr>
                            <tr>
                                <th> Phone </th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th> Fax </th>
                                <td>{{$data->fax}}</td>
                            </tr>
                            <tr>
                                <th> Email </th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th> City </th>
                                <td>{{$data->city}}</td>
                            </tr>
                            <tr>
                                <th> Country </th>
                                <td>{{$data->country}}</td>
                            </tr>
                            <tr>
                                <th> Location </th>
                                <td>{{$data->location}}</td>
                            </tr>
                            <tr>
                                <th> detail </th>
                                <td> {{$data->detail}} </td>
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

