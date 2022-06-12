@extends('layouts.adminwindow')

@section('title', 'Show Message '.$data->title)
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
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Show Message</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 200px"> Id </th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th> Hotel </th>
                                <td> {{$data->hotel->title}} </td>
                            </tr>
                            <tr>
                             <th> Name & Surname </th>
                             <td> {{$data->user->name}} </td>
                            </tr>
                            <tr>
                                <th> Subject </th>
                                <td> {{$data->subject}} </td>
                            </tr>
                            <tr>
                                <th> Review </th>
                                <td> {{$data->review}} </td>
                            </tr>

                            <tr>
                                <th> Subject </th>
                            <td>{{$data->rate}}</td>
                            </tr>
                            <tr>
                                <th> Ip Number </th>
                                <td>{{$data->ip}}</td>
                            </tr>
                            <tr>
                                <th> Status </th>
                                <td>{{$data->status}}</td>
                            </tr>
                            <tr>
                                <th> Create Date </th>
                                <td> {{$data->created_at}} </td>
                            </tr>
                            <tr>
                                <th> Updated Date </th>
                                <td> {{$data->updated_at}} </td>
                            </tr>
                            <tr>
                                <th> Admin Note </th>
                                <td>
                                    <form action="{{route ('admin.comment.update',['id'=>$data->id])}}" method="post">
                                        @csrf
                            <tr>
                                <th style="width: 30px">Admin Note :</th>
                                <td>
                                    <select name="status" id="status">
                                        <option selected value="true">True</option>
                                        <option value="false">False</option>
                                    </select>
                                </td>
                            </tr>
                                        <button type="submit" class="btn btn-primary me-2">Update Comment</button>
                                    </form>
                                </td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection

