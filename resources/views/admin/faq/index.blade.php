@extends('layouts.admin')

@section('title', 'FAQ List')
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
                          <a href="{{route('admin.faq.create')}}"<button class="btn btn-primary">Add</a></button>
                          <h4 class="card-title">FAQ List</h4>
                      </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Status</th>
                            <th>edit</th>
                            <th>delete</th>
                            <th>show</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                          <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->question}}</td>
                            <td>{!!$rs->answer!!}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route ('admin.faq.edit',['id'=>$rs->id])}}" <button class="btn btn-info">Edit</a></button></td>
                            <td><a href="{{route ('admin.faq.destroy',['id'=>$rs->id])}}" <button class="btn btn-danger"
                              onclick="return confirm('Deleting are you sure')">delete</a></button></td>
                            <td><a href="{{route ('admin.faq.show',['id'=>$rs->id])}}"<button class="btn btn-primary">Show</a></button></td>

                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

@endsection
