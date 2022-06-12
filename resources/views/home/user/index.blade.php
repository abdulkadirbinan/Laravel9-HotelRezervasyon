@extends('layouts.home')

@section('title', 'User Panel')
@section('content')
    <div class="bradcam_area breadcam_bg">
        <h3>User Panel</h3>
    </div>
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <h2 class="contact-title">User Menu</h2>
                    @include('home.user.usermenu')
                </div>
                <div class="col-lg-10">
                    <h2 class="contact-title">User Profile</h2>
                    @include('profile.show')
                </div>

            </div>
        </div>

    </section>

    <!-- ================ contact section end ================= -->

@endsection

