@extends('layouts.home')

@section('title', 'Contact', $setting->title)
@section('description',$setting->description)
@section('keyword',$setting->keyword)
@section('icon',Storage:: url($setting->icon))

@section('content')
<div class="bradcam_area breadcam_bg">
    <h3>Contact</h3>
</div>
<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
                @include('home.messages')
                <form class="form-contact contact_form" action="{{route("storemessage")}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" placeholder = 'Enter your name'" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="phone" id="telephone" type="tel" placeholder = 'Enter telephone'" placeholder="telphone">
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" placeholder = 'Enter email address'" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" placeholder = 'Enter Subject'" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder = 'Enter Message'" placeholder=" Name"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                {!! $setting->contact !!}
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

@endsection

