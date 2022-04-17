@extends('layouts.admin')

@section('title', 'Category List')
@section('content')

        <div class="card">
                  <div class="card-body">

                      <div class="col-sm-6">
                          <h4 class="card-title">Category List</h4>
                      </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Keywords</th>
                            <th>Description</th>
                            <th>Image</th>
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
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->keywords}}</td>
                            <td>{{$rs->description}}</td>
                            <td>{{$rs->image}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="/admin/category/edit{{$rs->id}}" <button class="btn btn-info">Edit</a></button></td>
                            <td><a href="/admin/category/delete{{$rs->id}}"<button class="btn btn-danger">Delete</a></button></td>
                            <td><a href="/admin/category/show{{$rs->id}}"<button class="btn btn-primary">Show</a></button></td>

                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

@endsection