@extends('layouts.home')

@section('title', $data->title)

@section('content')

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        <h3>{{$data->title }} Otel</h3>
    </div>
    <!-- bradcam_area_end -->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    @include('home.messages')
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{Storage::url($data->image)}}" alt="" style="height: 500px; width: 750px">
                        </div>
                        <div class="blog_details">
                            <h2>otel hakkında bilgiler
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> otel hakkında bilgi</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 yorum</a></li>
                            </ul>
                            <p class="excert">
                                {{$data->description }}

                            </p>
                            <p>
                                {!!$data->detail !!}

                            </p>
                            <div class="quote-wrapper">
                                <div class="quotes">
                                    {{$data->description }}

                                </div>
                            </div>
                            <p>
                                {{$data->description }}

                            </p>
                        </div>
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily ve 4 kişi beğendi.</p>
                            <div class="col-sm-4 text-center my-2 my-sm-0">
                                <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                            </div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <div
                                    class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="{{Storage::url($data->image)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#">
                                            <span class="lnr text-white ti-arrow-left"></span>
                                        </a>
                                    </div>
                                    <div class="detials">
                                        <p>Önceki hotel</p>
                                        <a href="#">
                                            <h4>{{$data->title }}</h4>
                                        </a>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                    <div class="detials">
                                        <p>Sonraki Hotel</p>
                                        <a href="#">
                                            <h4>{{$data->title }}</h4>
                                        </a>
                                    </div>
                                    <div class="arrow">
                                        <a href="#">
                                            <span class="lnr text-white ti-arrow-right"></span>
                                        </a>
                                    </div>
                                    <div class="thumb">
                                        <a href="#">
                                            <img class="img-fluid" src="{{Storage::url($data->image)}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        @php
                            $average = $data->comment->average('rate')
                        @endphp

                        <h4>({{$data->comment->count('id')}}) Comments
                            @if ($average==1)⭐ @endif
                            @if ($average==2)⭐⭐ @endif
                            @if ($average==3)⭐⭐⭐@endif
                            @if ($average==4)⭐⭐⭐⭐@endif
                            @if ($average==5)⭐⭐⭐⭐⭐@endif
                        </h4>
                        @foreach($reviews as $rs)
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="desc">
                                        <p class="comment">
                                         {{$rs->review}}
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#">{{$rs->user->name}} </a>
                                                </h5>
                                                <div><br></div>

                                                @if ($rs->rate==1)⭐ @endif
                                                @if ($rs->rate==2)⭐⭐ @endif
                                                @if ($rs->rate==3)⭐⭐⭐@endif
                                                @if ($rs->rate==4)⭐⭐⭐⭐@endif
                                                @if ($rs->rate==5)⭐⭐⭐⭐⭐@endif
                                                <p class="date">{{$rs->created_at}} </p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form" action="{{route('storecomment')}}" method="post">
                            @csrf
                            <div class="row">
                                <input class="input" type="hidden" name="hotel_id" value="{{$data->id}}">
                                <div class="col-12">
                                    <div class="form-group">
                              <textarea class="form-control w-100" name="review" cols="30" rows="9"
                                        placeholder="review"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="subject"  type="text" placeholder="subject">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <input type="radio" name="rate" value="1">
                                    <label>⭐️</label><br>
                                    <input type="radio" name="rate" value="2">
                                    <label>⭐️⭐️</label><br>
                                    <input type="radio" name="rate" value="3">
                                    <label>⭐️⭐️⭐️</label><br>
                                    <input type="radio" name="rate" value="4">
                                    <label>⭐️⭐️⭐️⭐️</label><br>
                                    <input type="radio" name="rate" value="5">
                                    <label>⭐️⭐️⭐️⭐️⭐️</label><br>
                                </div>

                            </div>
                            @auth
                                <div class="form-group">
                                    <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                                </div>
                            @else
                                <a href="/login" class="btn btn-normal pull-right"> For submit Your Review, Please Login</a>
                            @endauth
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                @foreach($images as $rs)
                                    <li>
                                        <a href="#">
                                            <img class="img-fluid" src="{{Storage::url($rs->image)}}" alt="">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Resaurant food</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Travel news</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Modern technology</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Product</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Inspiration</p>
                                        <p>(21)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Health Care</p>
                                        <p>(21)</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Diğer otelleri incelediniz mi?</h3>
                            <div class="media post_item">
                                <img src="{{ asset ('assets')}}/img/post/post_1.png" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>From life was you fish...</h3>
                                    </a>
                                    <p>January 12, 2019</p>
                                </div>
                            </div>
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
