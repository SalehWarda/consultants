<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <img src="{{asset('assets/site/img/logo.png')}}" alt="">
            <span>FlexStart</span>
        </a>

        <nav id="navbar" class="navbar">

            @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'site.home')
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">الرئيسية</a></li>
                    <li><a class="nav-link scrollto" href="#about">نبذة عنا</a></li>
                    <li><a class="nav-link scrollto" href="#services">الخدمات</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">الأعمال</a></li>
                    <li><a class="nav-link scrollto" href="#team">الفريق</a></li>
                    <li><a href="blog.html">المدونة</a></li>
                    <li><a href="{{route('site.domains')}}">الدومينات</a></li>

                    <li><a class="nav-link scrollto" href="#contact">تواصل معنا</a></li>




                    @guest
                        <li><a class="getstarted scrollto" href="{{route('site.login')}}">تسجيل الدخول</a></li>


                    @else
                        <li class="dropdown"><a href="#"><span>{{auth('web')->user()->name}}</span> <i class="ri-user-fill" style="font-size: 1.2rem"></i></a>
                            <ul>
                                <li><a href="{{route('site.customer.profile')}}">الملف الشخصي</a></li>

                                <li>
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">تسجيل الخروج</a>

                                    <form action="{{ route('site.logout.user') }}" method="post" id="logout-form"
                                          class="d-none">
                                        @csrf
                                    </form>
                                </li>

                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#">
                                <i class="ri-notification-3-fill" style="font-size: 1.2rem; margin-left: -5px"></i>
                                <span class="badge bg-danger rounded-circle " style="margin-bottom: 18px;">0</span>
                            </a>
                            <ul style="margin-right: -250px; margin-top: 10px">
                                <li><a class="dropdown-item d-flex align-items-center " href="{{route('site.customer.profile')}}">

                                        <div style="margin-left: 15px">
                                            <div class="icon-circle bg-dark">
                                                <i class="ri-file-line text-dark" style="font-size: 2.2rem"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">2/5/2021</div>
                                            <span class="font-weight-bold">Order ref#123596 status is under proccess</span>
                                        </div>
                                    </a>
                                </li>



                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('site.cart')}}">
                                <i class="ri-shopping-cart-fill" style="font-size: 1.2rem; margin-left: -5px"></i>
                                <span class="badge bg-danger rounded-circle " style="margin-bottom: 18px;">0</span>
                            </a>

                        </li>


                    @endguest
                </ul>
            @else

                <ul>
                    <li><a class="nav-link scrollto " href="{{route('site.home')}}">الرئيسية</a></li>
                    <li><a class="nav-link scrollto" href="{{route('site.home')}}">نبذة عنا</a></li>
                    <li><a class="nav-link scrollto" href="{{route('site.home')}}">الخدمات</a></li>
                    <li><a class="nav-link scrollto" href="{{route('site.home')}}">الأعمال</a></li>
                    <li><a class="nav-link scrollto" href="{{route('site.home')}}">الفريق</a></li>
                    <li><a href="{{route('site.home')}}">المدونة</a></li>
                    <li><a href="{{route('site.domains')}}">الدومينات</a></li>

                    <li><a class="nav-link scrollto" href="{{route('site.home')}}">تواصل معنا</a></li>




                    @guest
                        <li><a class="getstarted scrollto" href="{{route('site.login')}}">تسجيل الدخول</a></li>


                    @else

                        <li class="dropdown"><a href="#"><span>{{auth('web')->user()->name}}</span> <i class="ri-user-fill" style="font-size: 1.2rem"></i></a>
                            <ul>
                                <li><a href="{{route('site.customer.profile')}}">الملف الشخصي</a></li>

                                <li>
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">تسجيل الخروج</a>

                                    <form action="{{ route('site.logout.user') }}" method="post" id="logout-form"
                                          class="d-none">
                                        @csrf
                                    </form>
                                </li>

                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#">
                                <i class="ri-notification-3-fill" style="font-size: 1.2rem; margin-left: -5px"></i>
                                <span class="badge bg-danger rounded-circle " style="margin-bottom: 18px;">0</span>
                            </a>
                            <ul style="margin-right: -250px; margin-top: 10px">
                                <li><a class="dropdown-item d-flex align-items-center " href="{{route('site.customer.profile')}}">

                                        <div style="margin-left: 15px">
                                            <div class="icon-circle bg-dark">
                                                <i class="ri-file-line text-dark" style="font-size: 2.2rem"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">2/5/2021</div>
                                            <span class="font-weight-bold">Order ref#123596 status is under proccess</span>
                                        </div>
                                    </a>
                                </li>



                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="{{route('site.cart')}}">
                                <i class="ri-shopping-cart-fill" style="font-size: 1.2rem; margin-left: -5px"></i>
                                <span class="badge bg-danger rounded-circle " style="margin-bottom: 18px;">0</span>
                            </a>

                        </li>


                    @endguest
                </ul>
            @endif


            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
