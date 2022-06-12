@extends('layouts.adminwindow')

@section('title', 'User Detail '.$data->title)
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
                <h4 class="card-title">Show User</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th style="width: 200px"> Id </th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th> Name & Surname </th>
                            <td> {{$data->name}} </td>
                        </tr>
                        <tr>
                            <th> Email </th>
                            <td> {{$data->email}} </td>
                        </tr>

                        <tr>
                            <th> Roles </th>
                            <td>@foreach($data->roles as $role)
                                    {{$role->name}}
                                    <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}" <button class="btn btn-danger"
                                    onclick="return confirm('Deleting are you sure')">[x]</a></button>
                                @endforeach</td>
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
                            <th> Add Role to User </th>
                            <td>
                                <form action="{{route ('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <select name="role_id">
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary me-2">Add Role</button>
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

