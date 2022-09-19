<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{asset('assets/images/admin/users/avatar.png')}}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{auth('admin')->user()->name}}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> {{trans('dashboard.Active')}}</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">{{trans('dashboard.Control_Panel_Sections')}}</li>

                <li>
                    <a href="{{route('admin.dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-fill"></i>
                        <span>{{trans('dashboard.Home')}}</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-calendar-2-fill"></i>
                        <span>{{trans('dashboard.About_Us')}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.about')}}">{{trans('dashboard.About_Us')}}</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-fill"></i>
                        <span>{{trans('dashboard.Contact_information')}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.contact')}}">{{trans('dashboard.Contact_information')}}</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-fill"></i>
                        <span>{{trans('dashboard.Mail')}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.mail')}}">{{trans('dashboard.Mail')}}</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-coupon-2-fill"></i>
                        <span>{{trans('dashboard.Coupons')}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>


                        <li><a href="{{route('admin.coupons')}}">{{trans('dashboard.Coupons')}}</a></li>


                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-gift-fill"></i>
                        <span>{{trans('dashboard.Packages')}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>


                        <li><a href="{{route('admin.packages')}}">{{trans('dashboard.Packages')}}</a></li>


                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-secure-payment-fill"></i>
                        <span>{{trans('dashboard.Orders')}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>


                        <li><a href="{{route('admin.orders.index')}}">{{trans('dashboard.Orders')}}</a></li>


                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-comment-dots"></i>
                        <span>{{trans('site.Privacy_and_Usage_Policy')}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>


                        <li><a href="{{route('admin.privacy')}}">{{trans('site.Privacy_and_Usage_Policy')}}</a></li>


                        </li>

                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
