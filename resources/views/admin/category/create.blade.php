@extends('layouts.admin')

@section('title', 'Add Category')
@section('content')
        <h1>Add Category</h1>
{{--        <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic Table</h4>

                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Profile</th>
                            <th>VatNo.</th>
                            <th>Created</th>
                            <th>Status</th>
                            <th>edit</th>
                            <th>delete</th>
                            <th>show</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Jacob</td>
                            <td>53275531</td>
                            <td>12 May 2017</td>
                            <td>hello</td>
                            <td><button class="btn btn-success">Edit</button></td>
                            <td><button class="btn btn-danger">delete</button></td>
                            <td><button class="btn btn-primary">show</button></td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>53275531</td>
                            <td>12 May 2017</td>
                            <td>hello</td>
                            <td><button class="btn btn-success">Edit</button></td>
                            <td><button class="btn btn-danger">delete</button></td>
                            <td><button class="btn btn-primary">show</button></td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>53275531</td>
                            <td>12 May 2017</td>
                            <td>hello</td>
                            <td><button class="btn btn-success">Edit</button></td>
                            <td><button class="btn btn-danger">delete</button></td>
                            <td><button class="btn btn-primary">show</button></td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>53275531</td>
                            <td>12 May 2017</td>
                            <td>hello</td>
                            <td><button class="btn btn-success">Edit</button></td>
                            <td><button class="btn btn-danger">delete</button></td>
                            <td><button class="btn btn-primary">show</button></td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>53275531</td>
                            <td>12 May 2017</td>
                            <td>hello</td>
                            <td><button class="btn btn-success">Edit</button></td>
                            <td><button class="btn btn-danger">delete</button></td>
                            <td><button class="btn btn-primary">show</button></td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>53275531</td>
                            <td>12 May 2017</td>
                            <td>hello</td>
                            <td><button class="btn btn-success">Edit</button></td>
                            <td><button class="btn btn-danger">delete</button></td>
                            <td><button class="btn btn-primary">show</button></td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>53275531</td>
                            <td>12 May 2017</td>
                            <td>hello</td>
                            <td><button class="btn btn-success">Edit</button></td>
                            <td><button class="btn btn-danger">delete</button></td>
                            <td><button class="btn btn-primary">show</button></td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>--}}

        <div class="card-body">
            <h4 class="card-title">Basic form elements</h4>
            <p class="card-description"> Basic form elements </p>
            <form class="forms-sample" action="{{route ('admin.category.create')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Keywords</label>
                    <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">description</label>
                    <input type="text" class="form-control" name="description" placeholder="description">
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Status</label>
                    <select class="form-control" name="status">
                        <option>True</option>
                        <option>False</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>image upload</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <a href="/admin">Cancel</a <button class="btn btn-dark"></button>
            </form>
        </div>
@endsection

