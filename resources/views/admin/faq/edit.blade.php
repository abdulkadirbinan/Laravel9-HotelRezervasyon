 @extends('layouts.admin')

@section('title', 'Edit FAQ '.$data->title)
 @section('css')
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

     @endsection

@section('content')
        <h1>Edit FAQ {{$data->title}}</h1>
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
            <form class="forms-sample" action="{{route ('admin.faq.update',['id'=>$data->id])}}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Question</label>
                    <input type="text" class="form-control" name="question" value="{{$data->question}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Answer</label>
                    <textarea class="form-control" id='answer' name="answer">
                        {{$data->answer}}
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
                <button type="submit" class="btn btn-primary me-2">Update</button>
                <a href="{{route ('admin.faq.index')}}">Cancel</a <button class="btn btn-dark"></button>
            </form>
        </div>
@endsection
@section('foot')
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
     <script>
         $(function() {
             $('#answer').summernote()
         })
     </script>
 @endsection

