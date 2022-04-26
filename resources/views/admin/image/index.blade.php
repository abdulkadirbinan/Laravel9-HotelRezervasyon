@extends('layouts.adminwindow')

@section('title', 'Hotel Image Gallery')
@section('content')
    <h3>{{$hotel->title}}</h3>
    <form class="forms-sample" action="{{route ('admin.image.store',['hid'=>$hotel->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <input type="file" name="image" class="file-upload-default">
            <div class="input-group col-xs-12">
                <input type="file" class="form-control file-upload-info" name="image" placeholder="upload image">
            </div>
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
    </form>
    <div class="card">
                  <div class="card-body">
                      <div class="col-sm-6">
                          <h4 class="card-title">Hotel Image List</h4>
                      </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($images as $rs)
                          <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>
                                @if ($rs->image)
                                <img src="{{Storage::url($rs->image)}}" style="height:100px">
                                @endif
                            </td>
                            <td><a href="{{route ('admin.image.destroy',['hid'=>$hotel->id,'id'=>$rs->id])}}" <button class="btn btn-danger"
                              onclick="return confirm('Deleting are you sure')">Delete</a></button></td>

                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

@endsection

