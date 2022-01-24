

<!DOCTYPE html>
<html>
    <!-- InstanceBegin template="/Templates/dm.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta charset="utf-8">
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>Dmedia</title>
        <meta name="Description" content="We provide dentists with dental website design and dental marketing services. We’re specialist designers who offer full service marketing, web design and much more">

        <!-- InstanceEndEditable -->
        <!-- Stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7cPoppins:400,600&display=swap" rel="stylesheet">
        <link href="{{ asset('css/combined.css')}}"  rel="stylesheet">
        <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet" media="all">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <style type="text/css">
            .logo-box{
                width: 20%;
            }
            .hvr-bob img{
                width:100%;
            }
            .btn-style-four{
                background-image: linear-gradient(to right, #284b9c 0%, #eb1f81 100%)!important;
                
                
            }
            .header-style-three.fixed-header .main-menu .navigation > li > a{
                color: #284b9c !important;
            }
            .header-style-three .main-menu .navigation > li > a{
                color: #284b9c !important;
            }
            .btn-style-four:hover{
                background-image: linear-gradient(to right,  #eb1f81  0%, #284b9c 100%)!important;
            }
            .btn-style-five{
                background: #284b9c;
            }
            .about-section .content-column .title{
                color: #284b9c !important;
            }
            
            .btn-info {
                color: #fff;
                background-color: #284b9c;
                border-color: #284b9c;
            }
            .testimonial-section-six .image-column .image:before {
                background-color: #284b9c;
            }    
            .sec-title .title.style-two {
                color: #284b9c;
            }
            .testimonial-section-six .carousel-column .title-box h2:before{
                background-image: linear-gradient(to right, #284b9c 0%, #eb1f81 100%);
            }
            .services-block-three .inner-box .icon-box {
                background-color: #284b9c !important;
            }    
            .btn-style-four:hover .txt {
                background-image: linear-gradient(to right, #eb1f81 0%, #284b9c 100%);
            }    
            .testimonial-section-six .carousel-column .owl-nav .owl-prev, .testimonial-section-six .carousel-column .owl-nav .owl-next {
                color: #284b9c !important;
            }   
            .testimonial-section-six .carousel-column .owl-nav .owl-prev:hover, .testimonial-section-six .carousel-column .owl-nav .owl-next:hover{
                background-image: linear-gradient(to right, #eb1f81 0%, #284b9c 100%);
            }
            .testimonial-section-six .carousel-column .owl-nav .owl-prev:hover, .testimonial-section-six .carousel-column .owl-nav .owl-next:hover {
                color: #fff !important;
            }    
            
            @media only screen and (max-width: 767px) {
              .image-column{
                margin-top: 30px;
              }
            }   

            .about-section .counter-column .counter-column .inner {
                background-color: #284b9c !important;
            }    
            .about-section .counter-column .inner-column .counter-title {
                font-size: 20px !important;
            }    
        </style>
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
        <!-- InstanceBeginEditable name="head" -->
        <!-- InstanceEndEditable -->
       
    </head>
    <body>
        <div class="page-wrapper">
            <!-- Preloader -->
            <div class="preloader"></div>
            <!-- Main Header-->
            <header class="main-header header-style-three">
                <!--Header-Upper-->
                <div class="header-upper">
                    <div class="auto-container">
                        <div class="clearfix">
                            <!-- Logo Box -->
                            <div class="pull-left logo-box">
                                <div class="logo">
                                    <a href="/">
                                        <div class="logotext">
                                            <img src="{{ asset('images/logotext.png') }}">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Nav Outer -->
                            <div class="nav-outer clearfix">
                                <!-- Mobile Navigation Toggler For Mobile -->
                                <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                                <!-- End Mobile Navigation Toggler For Mobile -->
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md">
                                    <div class="navbar-header">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse scroll-nav clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li><a href="/" ><i class="fa fa-home"></i></a></li>
                                            <li>
                                                <a href="#" ><span data-hover="Về chúng tôi" >Về chúng tôi</span></a>
                                               
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" ><span data-hover="Dịch vụ" class="service-scroll">Dịch vụ</span></a>
                                               
                                            </li>
                                            
                                           
                                            
                                            <li>
                                                <a href="#"><span data-hover="Sự kiện">Sự kiện</span></a>
                                               
                                            </li>
                                            
                                             <li>
                                                <a href="{{ route('tintuc') }}"><span data-hover="Tin Tức">Tin tức</span></a>
                                               
                                            </li>
                                            
                                            <li>
                                                <a href="#"><span data-hover="Thư Viện">Thư Viện</span></a>
                                               
                                            </li>
                                            
                                            <li>
                                                <a href="#"><span data-hover="Tuyển dụng">Tuyển dụng</span></a>
                                               
                                            </li>
                                            
                                            <!--<i><a href="tel:01332672548"><span data-hover="0886 360 808"><i class="fa fa-phone"></i> 0886 360 808</span></a></li>-->
                                            <li><a href="#"><span data-hover="Liên hệ">Liên hệ</span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Header Upper-->
                <!-- Mobile Menu  -->
                <div class="mobile-menu">
                    <div class="menu-backdrop"></div>
                    <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    <nav class="menu-box">
                        <div class="nav-logo">
                            <a href="/">
                                <div class="logotext">
                                    <img src="{{ asset('images/logotext.png') }}">
                                </div>
                            </a>
                        </div>
                        <ul class="navigation clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </ul>
                    </nav>
                </div>
                <!-- End Mobile Menu -->
            </header>
            
            @yield('content')

            <footer class="main-footer style-three">
                <div class="auto-container">
                    <!--Widgets Section-->
                    <div class="widgets-section">
                        <div class="row clearfix">
                            <!--big column-->
                            <div class="big-column col-lg-7 col-md-12 col-sm-12">
                                <div class="row clearfix">
                                    <!--Footer Column-->
                                    <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="footer-widget logo-widget">
                                            <div class="logo">
                                                <a href="/"><img src="{{ asset('images/white-logo.png') }}" alt="" /></a>
                                            </div>
                                            <div class="bottomtel">HOTLINE:<a href="tel:01332672548" class="text-white"> 0886360808</a></div>
                                            <ul class="social-icon-one">
                                                <li><a href="https://www.facebook.com/dmediamarketingnhakhoa/" title="Facebook"><i class="fa fa-facebook-square"></i></a></li>
                                                <li><a href="https://www.facebook.com/dmediamarketingnhakhoa/" title="Twitter"><i class="fa fa-twitter-square"></i></a></li>
                                                <li><a href="https://www.facebook.com/dmediamarketingnhakhoa/" title="Blog"><i class="fa fa-rss-square"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Footer Column-->
                                    <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="footer-widget list-widget">
                                            <h5>GIỚI THIỆU </h5>
                                            <ul class="footer-list">
                                                <li><a href="javascript:void(0)">Về chúng tôi</a></li>
                                                <li><a href="javascript:void(0)">Câu chuyện khách hàng</a></li>
                                              
                                                <li><a href="{{ route('tintuc') }}">Blog</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Footer Column-->
                                    <div class="footer-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="footer-widget list-widget">
                                            <h5>DỊCH VỤ</h5>
                                            <ul class="footer-list">
                                                <li><a href="/website.html">Website nha khoa</a></li>
                                                <li><a href="javascript:void(0)">Xây dựng thương hiệu</a></li>
                                                <li><a href="javascript:void(0)">Quản lý mạng xã hội</a></li>
                                                
                                                <li><a href="javascript:void(0)">Phân tích dữ liệu</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--big column-->
                            <div class="big-column col-lg-5 col-md-12 col-sm-12">
                                <div class="row clearfix">
                                    <!--Footer Column-->
                                    <div class="footer-column col-lg-6 col-md-4 col-sm-12">
                                        <div class="footer-widget list-widget">
                                            <h5>DỊCH VỤ OFFLINE</h5>
                                            <ul class="footer-list">
                                                <li><a href="javascript:void(0)">Bộ nhận diện phòng khám</a></li>
                                                <li><a href="javascript:void(0)">Văn phòng phẩm</a></li>
                                                <li><a href="javascript:void(0)">Thiết kế ấn phẩm</a></li>
                                                <li><a href="javascript:void(0)">Video giới thiệu</a></li>
                                                <li><a href="javascript:void(0)">Quay chụp</a></li>
                                                <li><a href="javascript:void(0)">Sáng tạo nội dung</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Footer Column-->
                                    <div class="footer-column col-lg-6 col-md-4 col-sm-12">
                                        <div class="footer-widget list-widget">
                                            <h5>ĐĂNG KÝ NGAY</h5>
                                            <!-- Subscribe Form -->
                                            <div id="maillist">
                                                <div class="subscribe-form">
                                                    
                                                        <div class="form-group">
                                                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email address" required>
                                                        </div>
                                                        <div>
                                                            <div class="pt-3" ><a href="https://register-landingpage.dthdental.vn"><input type="submit" value="Theo dõi ngay"  class="btn btn-info" name="subscribe"  ></a></div>
                                                        </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="text-white">
                                                <p> Chúng tôi coi trọng quyền riêng tư của bạn và không bao giờ chuyển thông tin chi tiết cho bên thứ ba <a href="terms-privacy.html">Xin vui lòng đọc chính sách bảo mật.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="mb-4 col-lg-12 col-md-12 col-sm-12">
                        <div class=" text-white text-center">© D'media</div>
                    </div>
                </div>
            </footer>
        </div>
        <!--End pagewrapper-->
        <!--Scroll to top-->
        <div class="back-to-top scroll-to-target show-back-to-top" data-target="html">TOP</div>
        <!--<script src="../js/compressed4.js"></script>-->

      


        <script src="{{ asset('js/jquery-3.5.1.min.js')}}  "></script>
        <script src="{{ asset('js/jquery-migrate-3.3.2.min.js')}}  "></script>
        <script src="{{ asset('js/bootstrap.min.js')}}  "></script>
        <!--<script src="../js/swiper.min.js"></script>-->
        <script src="{{ asset('js/parallax.min.js')}}  "></script>
        <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js')}}  "></script>
        <script src="{{ asset('js/jquery.fancybox.js')}}  "></script>
        <script src="{{ asset('js/appear.js')}}  "></script>
        <script src="{{ asset('js/owl.js')}}  "></script>
        <!--<script src="../js/wow.js"></script>-->
        <script src="js/script.js"></script>
        <!-- InstanceBeginEditable name="EditRegion4" -->
        <!--<script src="js/jquery.fancybox.js"></script>-->
        <!--<script src="js/owl.js"></script>-->
        <!-- InstanceEndEditable -->
        <link rel="stylesheet" type="text/css" href="cookie/cookieconsent.min.css" />
        <script src="cookie/cookieconsent.min.js"></script>
        
        <script>
            
            $(".service-scroll").click(function() {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $(".all-services").offset().top

                }, 500);
               $('body').removeClass('mobile-menu-visible');
            });
        </script>
    </body>
    <!-- InstanceEnd -->
</html>