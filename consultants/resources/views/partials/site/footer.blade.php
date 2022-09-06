<footer id="footer" class="footer">



    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="{{asset('assets/site/img/logo.png')}}" alt="">
                        <span>FlexStart</span>
                    </a>
                    <br>
                    <p>{!! $about->body_one !!}</p>
                    <div class="social-links mt-3">
                        <a href="https://twitter.com/" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="https://facebook.com/" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://linkedin.com/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>الصفحات</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right scrollto"></i> <a href="#hero">الرئيسية</a></li>
                        <li><i class="bi bi-chevron-right scrollto"></i> <a href="#about">نبذة عنا</a></li>
                        <li><i class="bi bi-chevron-right scrollto"></i> <a href="#pricing">الخدمات</a></li>
                        <li><i class="bi bi-chevron-right scrollto"></i> <a href="#contact">تواصل معنا</a></li>
{{--                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>--}}
{{--                        <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>--}}
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>الخدمات</h4>
                    <ul>
                        @foreach($packages as $package)
                        <li><i class="bi bi-chevron-right scrollto"></i> <a href="#pricing">{{$package->title}}</a></li>
                        @endforeach

                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>تواصل معنا</h4>
                    <p>
                        {{$contact->address}} <br>
                       <br>
                        <strong>Phone:</strong> {{$contact->mobile}}<br>
                        <strong>Email:</strong> {{$contact->email}}<br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>
