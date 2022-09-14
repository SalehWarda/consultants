<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{asset('assets/images/admin/users/avatar.png')}}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{auth('admin')->user()->name}}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> نشط</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">أقسام لوحة التحكم</li>

                <li>
                    <a href="{{route('admin.dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-fill"></i>
                        <span>الرئيسية</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-calendar-2-fill"></i>
                        <span>نبذة عنا</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.about')}}">نبذة عنا</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-fill"></i>
                        <span>معلومات التواصل</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.contact')}}">معلومات التواصل</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-fill"></i>
                        <span>البريد الوارد</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.mail')}}">البريد الوارد</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-coupon-2-fill"></i>
                        <span>كوبونات الخصم</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>


                        <li><a href="{{route('admin.coupons')}}">كوبونات الخصم</a></li>


                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-gift-fill"></i>
                        <span>الباقات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>


                        <li><a href="{{route('admin.packages')}}">الباقات</a></li>


                        </li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-secure-payment-fill"></i>
                        <span>الطلبات</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>


                        <li><a href="{{route('admin.orders.index')}}">الطلبات</a></li>


                        </li>

                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
