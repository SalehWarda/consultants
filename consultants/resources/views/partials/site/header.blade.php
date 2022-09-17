<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{route('site.home')}}" class="logo d-flex align-items-center">
            <img src="{{asset('assets/site/img/holla.png')}}" alt="">
        </a>

        <nav id="navbar" class="navbar">

            @if(\Illuminate\Support\Facades\Route::currentRouteName() == 'site.home')
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">{{trans('site.Home')}}</a></li>
                    <li><a class="nav-link scrollto" href="#about">{{trans('site.About_Us')}}</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">{{trans('site.Services')}}</a></li>


                    <li><a class="nav-link scrollto" href="#contact">{{trans('site.Contact_Us')}}</a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>



                    <div class="dropdown d-none d-sm-inline-block  ">
                        <button type="button" class="btn header-item waves-effect "
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if (App::getLocale() == 'ar')
                                ({{ App::getLocale() }})
                                <i class="ri-translate-2" style="font-size: 1.2em;" ></i>
                            @else
                                ({{ App::getLocale() }})
                                <i class="ri-translate-2" style="font-size: 1.2em;" ></i>
                            @endif
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a rel="alternate" class="btn btn-country btn-lg btn-block {{$properties['native'] == App::getLocale() ? 'active' : ''}} " hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="dropdown-item notify-item">
                                    {{   $properties['name'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    @guest

                        <li class="dropdown">
                            <livewire:frontend.cart-component/>

                        </li>
                        <li><a class="btn-login" href="{{route('site.login')}}">{{trans('site.Login')}}<i class="ri-login-box-line" style="font-size: 1.2rem"></i></a></li>


                    @else
                        <li class="dropdown"><a href="#"><span>{{auth('web')->user()->name}}</span> <i class="ri-user-fill" style="font-size: 1.2rem"></i></a>
                            <ul>
                                <li><a href="{{route('site.customer.profile')}}">{{trans('site.Profile')}}</a></li>

                                <li>
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{trans('site.Logout')}}</a>

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
                            <livewire:frontend.cart-component/>


                        </li>


                    @endguest


                </ul>
            @else

                <ul>
                    <li><a class="nav-link scrollto " href="{{route('site.home')}}">{{trans('site.Home')}}</a></li>
                    <li><a class="nav-link scrollto" href="{{route('site.home')}}">{{trans('site.About_Us')}}</a></li>
                    <li><a class="nav-link scrollto" href="{{route('site.home')}}">{{trans('site.Services')}}</a></li>


                    <li><a class="nav-link scrollto" href="{{route('site.home')}}">{{trans('site.Contact_Us')}}</a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>
                    <li><a class="nav-link scrollto" href="#"></a></li>


                    <div class="dropdown d-none d-sm-inline-block  ">
                        <button type="button" class="btn header-item waves-effect "
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if (App::getLocale() == 'ar')
                                ({{ App::getLocale() }})
                                <i class="ri-translate-2" style="font-size: 1.2em;" ></i>
                            @else
                                ({{ App::getLocale() }})
                                <i class="ri-translate-2" style="font-size: 1.2em;" ></i>
                            @endif
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a rel="alternate" class="btn btn-country btn-lg btn-block {{$properties['native'] == App::getLocale() ? 'active' : ''}} " hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="dropdown-item notify-item">
                                    {{   $properties['name'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    @guest
                        <li class="dropdown">
                           <livewire:frontend.cart-component/>

                        </li>
                        <li><a class="btn-login" href="{{route('site.login')}}">{{trans('site.Login')}}<i class="ri-login-box-line" style="font-size: 1.2rem"></i></a></li>


                    @else

                        <li class="dropdown"><a href="#"><span>{{auth('web')->user()->name}}</span> <i class="ri-user-fill" style="font-size: 1.2rem"></i></a>
                            <ul>
                                <li><a href="{{route('site.customer.profile')}}">{{trans('site.Profile')}}</a></li>

                                <li>
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{trans('site.Logout')}}</a>

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
                            <livewire:frontend.cart-component/>


                        </li>


                    @endguest
                </ul>
            @endif


            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>
