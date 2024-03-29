@extends('layouts.admin')

@section('title', 'Add Hotel')
@section('javascript')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
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
        <h1>Add Category</h1>
 <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
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
                    <input type="number" class="form-control" name="phone" ">
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
                    <textarea class="form-control" id="detail" name="detail">


                    </textarea>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#detail' ) )
                            .then( editor => {
                                console.log( editor );
                            } )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
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

@endsection

