<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- js -->
    <script type="text/javascript" src="/frontend/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- /nav -->
    <script src="/frontend/js/modernizr-2.6.2.min.js"></script>
    <script src="/frontend/js/classie.js"></script>
    <script src="/frontend/js/demo1.js"></script>
    <!-- //nav -->
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
    <script>
        shoe.render();

        shoe.cart.on('shoe_checkout', function (evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });
    </script>
    <!-- //cart-js -->
    <!--search-bar-->
    <script src="/frontend/js/search.js"></script>
    <!--//search-bar-->
    <script src="/frontend/js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 1000,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>
    <!-- js for portfolio lightbox -->
    <!-- start-smoth-scrolling -->
    <script type="/frontend/text/javascript" src="js/move-top.js"></script>
    <script type="/frontend/text/javascript" src="js/easing.js"></script>
    <script type="/frontend/text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smoth-scrolling -->

    <script type="/frontend/text/javascript" src="js/bootstrap-3.1.1.min.js"></script>