@extends('layouts.home')

@section('title', $category->title .  ' Hotels')

@section('content')

    <div class="bradcam_area breadcam_bg_1">
        <h3>Laxaries Rooms</h3>
    </div>
    <div class="offers_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Our Offers</span>
                        <h3>Ongoing Offers</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($hotels as $rs)
                    <div class="col-xl-4 col-md-4">
                        <div class="single_offers">
                            <div class="about_thumb" >
                                <img src="{{Storage::url($rs->image)}}" style="height: 350px; width: 362px;" alt="">
                            </div>
                            <h2>{{$rs->title}}</h2>
                            <h3>Up to 35% savings on Club <br>
                                rooms and Suites</h3>
                            <ul>
                                <li>{{$rs->star}} star</li>
                                <li>3 Adults & 2 Children size</li>
                                <li>{{$rs->location}},{{$rs->city}}</li>
                            </ul>
                            <a href="{{route('hotel',['id'=>$rs->id])}}" class="book_now">book now</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Featured Rooms</span>
                        <h3>Choose a Better Room</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="{{ asset ('assets')}}/img/rooms/1.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Superior Room</h3>
                        </div>
                        <a href="#" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="{{ asset ('assets')}}/img/rooms/2.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Deluxe Room</h3>
                        </div>
                        <a href="#" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="{{ asset ('assets')}}/img/rooms/3.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Signature Room</h3>
                        </div>
                        <a href="#" class="line-button">book now</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="{{ asset ('assets')}}/img/rooms/4.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>From $250/night</span>
                            <h3>Couple Room</h3>
                        </div>
                        <a href="#" class="line-button">book now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
