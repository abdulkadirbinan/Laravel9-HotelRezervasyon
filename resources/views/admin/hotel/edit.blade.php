 @extends('layouts.admin')

@section('title', 'Edit Hotel :'.$data->title)
 @section('css')
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

     @endsection

@section('content')
        <h1>Edit Hotel {{$data->title}}</h1>
        <div class="page-header">
            <h3 class="page-title"> Chart-js </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">df</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Chart-js</li>
                </ol>
            </nav>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="{{route ('admin.hotel.update',['id'=>$data->id])}}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >Parent Hotel</label>
                    <select class="form-control" name="category_id" >
                        @foreach($datalist as $rs)
                            <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Keywords</label>
                    <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">description</label>
                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Star</label>
                    <input type="number" class="form-control" name="star" value="{{$data->star}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="address" value="{{$data->address}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Phone</label>
                    <input type="number" class="form-control" name="phone"  value="{{$data->phone}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Fax</label>
                    <input type="number" class="form-control" name="fax" value="{{$data->fax}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="email" value="{{$data->email}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">City</label>
                    <input type="text" class="form-control" name="city" placeholder="city" value="{{$data->city}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Country</label>
                    <input type="text" class="form-control" name="country" placeholder="country" value="{{$data->country}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="location" value="{{$data->location}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Detail</label>
                    <textarea class="form-control" id='detail' name="detail">
                        {{$data->detail}}
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="exampleSelectGender">Status</label>
                    <select class="form-control" name="status">
                        <option selected>{{$data->status}}</option>
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
                <button type="submit" class="btn btn-primary me-2">Update</button>
                <a href="{{route ('admin.hotel.index')}}">Cancel</a <button class="btn btn-dark"></button>
            </form>
        </div>
@endsection
@section('foot')
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
     <script>
         $(function() {
             $('#detail').summernote()
         })
     </script>
 @endsection

