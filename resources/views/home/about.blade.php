@extends('layouts.home')

@section('title', 'About Us', $setting->title)
@section('description',$setting->description)
@section('keyword',$setting->keyword)
@section('icon',Storage:: url($setting->icon))

@section('content')
<div class="bradcam_area breadcam_bg">
    <h3>Hakkımızda</h3>
</div>
<!-- bradcam_area_end -->

<!-- about_area_start -->
<div class="about_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="about_info">
                    <p>{!! $setting->aboutus !!}</p>
                    <a href="#" class="line-button">Learn More</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- about_area_end -->
<!-- forQuery_start -->
<div class="forQuery">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 col-md-12">
                <div class="Query_border">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-6 col-md-6">
                            <div class="Query_text">
                                <p>For Reservation 0r Query?</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="phone_num">
                                <a href="#" class="mobile_no">+10 576 377 4789</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- forQuery_end-->

@endsection

