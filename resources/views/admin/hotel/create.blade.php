@extends('layouts.admin')

@section('title', 'Add Hotel')
@section('content')
        <h1>Add Category</h1>
 <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">Basic form elements</h4>
            <p class="card-description"> Basic form elements </p>
            <form class="forms-sample" action="{{route ('admin.hotel.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                        <label>Parent Hotel</label>
                    <select class="form-control" name="category_id">

                        @foreach($data as $rs)
                            <option value="{{$rs->id}}"> {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Keywords</label>
                    <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Description</label>
                    <input type="text" class="form-control" name="description" placeholder="description">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Star</label>
                    <input type="number" class="form-control" name="star" value="0">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="address">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Phone</label>
                    <input type="text" class="form-control" name="phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Fax</label>
                    <input type="number" class="form-control" name="fax" value="0">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">City</label>
                    <input type="text" class="form-control" name="city" placeholder="city">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Country</label>
                    <input type="text" class="form-control" name="country" placeholder="country">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="location">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Detail</label>
                    <textarea class="form-control" name="detail">


                    </textarea>
                </div>

                <div class="form-group">
                    <label for="exampleSelectGender">Status</label>
                    <select class="form-control" name="status">
                        <option>True</option>
                        <option>False</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="image" class="file-upload-default">
                    <div class="input-group col-xs-12">
                            <input type="file" class="form-control file-upload-info" name="image" placeholder="upload image">
                        </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <a href="/admin">Cancel</a <button class="btn btn-dark"></button>
            </form>
        </div>
      </div>
 </div>

{{--        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="form-control" id="exampleSelectGender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity1">City</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Textarea</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
                <div class="form-group">
                    <label>File upload</label>
                    <div class="input-group">
                        <div class="input-group">
                            <input type="file" class="custom-file-input" name="image">
                        </div>
                    </div>
                </div>
                                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="image" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="file" class="form-control file-upload-info" placeholder="Upload Image">

                    </div>
                </div>
        --}}
@endsection

