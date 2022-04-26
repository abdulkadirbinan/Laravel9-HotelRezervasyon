@extends('layouts.admin')

@section('title', 'Hotel List')
@section('content')

        <div class="card">
                  <div class="card-body">
                      <div class="col-sm-6">
                          <a href="{{route('admin.hotel.create')}}"<button class="btn btn-primary">Add</a></button>
                          <h4 class="card-title">Hotel List</h4>
                      </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Title</th>
{{--                            <th>Star</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Location</th>--}}
                            <th>Image</th>
                            <th>Image Gallery</th>
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
                            <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title) }}</td>
                            <td>{{$rs->title}}</td>
{{--                            <td>{{$rs->star}}</td>
                            <td>{{$rs->address}}</td>
                            <td>{{$rs->phone}}</td>
                            <td>{{$rs->fax}}</td>
                            <td>{{$rs->email}}</td>
                            <td>{{$rs->city}}</td>
                            <td>{{$rs->country}}</td>
                            <td>{{$rs->location}}</td>--}}
                              <td>
                                @if ($rs->image)
                                <img src="{{Storage::url($rs->image)}}" style="height:40px">
                                @endif
                            </td>
                              <td>  <a href="{{route ('admin.image.index',['hid'=>$rs->id])}}"
                                  onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')" >
                                  <img src="{{ asset('assets')}}/admin/images/gallery.png">
                                  </a>
                              </td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route ('admin.hotel.edit',['id'=>$rs->id])}}" <button class="btn btn-info">Edit</a></button></td>
                            <td><a href="{{route ('admin.hotel.destroy',['id'=>$rs->id])}}" <button class="btn btn-danger"
                              onclick="return confirm('Deleting are you sure')">delete</a></button></td>
                            <td><a href="{{route ('admin.hotel.show',['id'=>$rs->id])}}"<button class="btn btn-primary">Show</a></button></td>

                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

@endsection
