@extends('layouts.home')

@section('title', 'FAQ', $setting->title)
@section('description',$setting->description)
@section('keyword',$setting->keyword)
@section('icon',Storage:: url($setting->icon))
@section('headerjs')
    <style>
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active, .accordion:hover {
            background-color: #ccc;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
    </style>
@endsection
@section('content')
<div class="bradcam_area breadcam_bg">
    <h3>FAQ</h3>
</div>
<!-- bradcam_area_end -->

<!-- about_area_start -->
<div class="about_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="about_info">
                    <h1>FAQ</h1>
                    <br>
                    @foreach($datalist as $rs)
                        <button class="accordion">{{$rs->question}}</button>
                        <div class="panel">
                            <p>{!! $rs->answer !!}</p>
                        </div>

                    @endforeach
                    <script>
                        var acc = document.getElementsByClassName("accordion");
                        var i;

                        for (i = 0; i < acc.length; i++) {
                            acc[i].addEventListener("click", function () {
                                this.classList.toggle("active");
                                var panel = this.nextElementSibling;
                                if (panel.style.display === "block") {
                                    panel.style.display = "none";
                                } else {
                                    panel.style.display = "block";
                                }
                            });
                        }
                    </script>
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

