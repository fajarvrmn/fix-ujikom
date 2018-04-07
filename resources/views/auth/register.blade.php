
<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('frontend.head')
</head>

<body>
    <!-- banner -->
    <div class="banner_top innerpage" id="home">
        <div class="wrapper_top_w3layouts">
            <div class="header_agileits">
                <div class="logo inner_page_log">
                    <h1><a class="navbar-brand" href="index.html"><span>Cars</span> <i>Zone</i></a></h1>
                </div>
                <div class="overlay overlay-contentpush">
                    <button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

                    <nav>
                        <ul>
                           @include('frontend.navbar')
                        </ul>
                    </nav>
                </div>
                <div class="mobile-nav-button">
                    <button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
                </div>
                <!-- cart details -->
        
            </div>
        </div>
        <!-- //cart details -->
        <!-- search -->
    
        <!-- //search -->
        <div class="clearfix"></div>
        <!-- /banner_inner -->
        <div class="services-breadcrumb_w3ls_agileinfo">
            <div class="inner_breadcrumb_agileits_w3">

                <ul class="short">
                 
                </ul>
            </div>
        </div>
        <!-- //banner_inner -->
    </div>

    <!-- //banner -->
    <!-- top Products -->
    <div class="ads-grid_shop">
        <div class="shop_inner_inf">
            <div class="error_page">
                <h4>404</h4>
                <p>Halaman Tidak ditemukan</p>
               
  
                <a class="b-home" href="/">Back to Home</a>
            </div>
        </div>
    </div>
    <!-- footer -->

    <!-- //footer -->
    @include('frontend.script')


</body>

</html>