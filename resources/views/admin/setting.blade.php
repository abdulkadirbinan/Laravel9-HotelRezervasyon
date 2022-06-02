@extends('layouts.admin')

@section('title', 'Settings')
@section('css')

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form role="form" action="{{route('admin.setting.update')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                <div class="form-group">
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" class="form-control" id="exampleInputName1" id="title" name="title" value="{{$data->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Keywords</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="keywords" value="{{$data->keywords}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Description</label>
                                    <input type="Description" class="form-control" id="exampleInputName1" name="description" value="{{$data->description}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Company</label>
                                    <input type="Description" class="form-control" id="exampleInputName1" name="company" value="{{$data->company}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Adress</label>
                                    <input type="Description" class="form-control" id="exampleInputName1" name="adress" value="{{$data->adress}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Phone</label>
                                    <input type="Description" class="form-control" id="exampleInputName1" name="phone" value="{{$data->phone}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Email</label>
                                    <input type="Description" class="form-control" id="exampleInputName1" name="email" value="{{$data->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelectGender">Status</label>
                                    <select name="status" class="form-control">
                                        <option selected>{{$data->status}}</option>
                                        <option value="true">True</option>
                                        <option value="false">False</option>
                                    </select>
                                </div>
                                <p>smtp settings</p>
                                <div class="form-group">
                                    <label for="exampleInputName1">Smtp Server</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="smtpserver" value="{{$data->smtpserver}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Smtp Email</label>
                                    <input type="email" class="form-control" id="exampleInputName1" name="smtpemail" value="{{$data->smtppassword}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Smtp Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="smtppassword" value="{{$data->smtppassword}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Smtp Port</label>
                                    <input type="Description" class="form-control" id="exampleInputName1" name="smtpport" value="{{$data->smtpport}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                                </div>
                                <p>Social Media</p>
                                <div class="form-group">
                                    <label for="exampleInputName1">Facebook</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="facebook" value="{{$data->facebook}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Instagram</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="instagram" value="{{$data->instagram}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Twitter</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="twitter" value="{{$data->twitter}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Youtube</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="youtube" value="{{$data->youtube}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">About us</label>
                                    <textarea class="form-control" id="aboutus" name="aboutus" placeholder="aboutus">
                                    {{$data->aboutus}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Contact</label>
                                    <textarea class="form-control" id="contact" name="contact" placeholder="contact">
                                    {{$data->contact}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">References</label>
                                    <textarea class="form-control" id="references" name="references" placeholder="references">
                                    {{$data->references}}
                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('foot')
    <script>
        ClassicEditor
            .create(document.querySelector('#aboutus'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#contact'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#references'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        $('#bologna-list a').on('click', function(e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>
@endsection
