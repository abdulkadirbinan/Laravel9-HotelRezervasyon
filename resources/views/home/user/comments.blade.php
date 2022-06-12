@extends('layouts.home')

@section('title', 'User Comments & Reviews')
@section('content')
    <div class="bradcam_area breadcam_bg">
        <h3>User Panel</h3>
    </div>
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <h2 class="contact-title">User Comment</h2>
                    @include('home.user.usermenu')
                </div>
                <div class="col-lg-10">
                    <h2 class="contact-title">User Comments & Reviews</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Hotel</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($comments as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td><a href="{{route('hotel',['id'=>$rs->hotel_id])}}">{{$rs->hotel->title}}</a> </td>
                                    <td>{{$rs->user->name}}</td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->review}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" <button class="btn btn-danger"
                                    onclick="return confirm('Deleting are you sure')">Delete</a></button></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- ================ contact section end ================= -->

@endsection

