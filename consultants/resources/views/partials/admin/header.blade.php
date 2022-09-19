<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{route('admin.dashboard')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/hulla1.png')}}" alt="logo-sm" height="60">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{asset('assets/images/hulla1.png')}}" alt="logo-dark" height="60">
                                </span>
                </a>

                <a href="{{route('admin.dashboard')}}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/hulla1.png')}}" alt="logo-sm-light" height="60">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{asset('assets/images/hulla1.png')}}" alt="logo-light" height="60">
                                </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

            <!-- App Search-->



        </div>

        <div class="d-flex">




            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item waves-effect"
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



            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
               <livewire:backend.header.notification-component/>
            </div>

            <div class="dropdown d-inline-block">
                <livewire:backend.header.mail-notification-component/>
            </div>

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{asset('assets/images/admin/users/avatar.png')}}"
                         alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">{{auth('admin')->user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('admin.profile')}}"><i class="ri-user-line align-middle me-1"></i> {{trans('site.Profile')}}</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger"  href="javascript:void(0);"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="ri-shut-down-line align-middle me-1 text-danger"></i>{{trans('site.Logout')}}</a>
                    <form action="{{route('admin.logout')}}" method="post" id="logout-form" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>



        </div>
    </div>
</header>
