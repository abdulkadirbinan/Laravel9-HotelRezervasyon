<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            @php
                $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
            @endphp
            <div class="container-fluid p-0">
                <div class="row align-items-center no-gutters">
                    <div class="col-xl-5 col-lg-6">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    @foreach($mainCategories as $rs)

                                            @if(count($rs->children))
                                            <li> <a href="#">{{ $rs->title }} <i class="ti-angle-down"></i></a>
                                                @include('home.categorytree',['children' => $rs->children])
                                            </li>
                                            @else
                                            <li><a href="/menu/{{ $rs->id }}">{{ $rs->title }} </a></li>
                                            @endif

                                    @endforeach
                                        <li><a href="{{route('faq')}}">FAQ</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                        <li><a href="{{route('about')}}">About Us</a></li>
                                        <li><a href="{{route('references')}}">References</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="{{route('home')}}">
                                <img src="{{ asset ('assets')}}/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                        <div class="book_room">
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    @guest()
                                    @auth()
                                        <li><a href="/loginuser">{{Auth::user()->name}}</a></li>
                                        <a href="/logoutuser">Logout</a>
                                    @endauth
                                    @endguest
                                    <li><a href="/loginregister"></a></li>
                                </ul>
                            </div>
                            <div class="book_btn d-none d-lg-block">
                                <a class="popup-with-form" href="#test-form">Book A Room</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->

