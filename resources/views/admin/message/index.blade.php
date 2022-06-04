@extends('layouts.admin')

@section('title', 'Contact Form Message List')
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
        <div class="card">
                  <div class="card-body">
                      <div class="col-sm-6">
                          <h4 class="card-title">Message List</h4>
                      </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>delete</th>
                            <th>show</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                          <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->name}}</td>
                              <td>{{$rs->phone}}</td>
                              <td>{{$rs->email}}</td>
                              <td>{{$rs->subject}}</td>
                              <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" <button class="btn btn-danger"
                                 onclick="return confirm('Deleting are you sure')">Delete</a></button></td>
                            <td><a href="{{route('admin.message.show',['id'=>$rs->id])}}" <button class="btn btn-primary"
                              onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a></button></td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

@endsection
