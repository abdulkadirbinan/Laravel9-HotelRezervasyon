@extends('layouts.admin')

@section('title', 'Add FAQ')
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
        <h1>Add FAQ</h1>
 <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <form class="forms-sample" action="{{route ('admin.faq.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Question</label>
                    <input type="text" class="form-control" name="question" placeholder="Question">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Answer</label>
                    <textarea class="form-control" name="answer" id="answer" placeholder="write your answer"></textarea>
                    <script>
                        ClassicEditor
                            .create( document.querySelector('#answer'))
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
                <button type="submit" class="btn btn-primary me-2">Submit</button>
            </form>
        </div>

      </div>
 </div>

@endsection

