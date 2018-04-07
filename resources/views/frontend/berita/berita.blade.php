
<!DOCTYPE html>
<html lang="zxx">

@include('frontend.about.headd')

<body>

<div class="banner_top innerpage" id="home">
		
	<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="/"><span>Cars</span> <i>Zone</i></a></h1>
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
					<li><a href="/">Home</a><i>|</i></li>
					<li>Berita</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>
	
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			
	<h3 class="head">{{$beritaku->judul}}</h3>	
<center><div class="col-md-12">
<img src="{{ asset('/img/'.$beritaku->foto.'') }}"  style="width: 1000px; height: 500px;" alt=" " class="img-responsive">

	</div></center>



	
			
			<div class="inner_section_w3ls">
				
				<div class="col-md-12 news-right">
					
					<b><p class="sub_p" style="text-align: justify;">{!!$beritaku->isi!!}</p>
					</b>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>

	</div>
			

		<div class="clearfix"> </div>
</div>	

 <center><a href="/"><h4> Back </h4></a></center><br><br>
	
		
<div class="footer_agileinfo_w3">
        <div class="footer_inner_info_w3ls_agileits">
            <div class="col-md-3 footer-left">
                <h2><a href="/"><span>C</span>ars Zone </a></h2>
                <p >Perusahaan penyedia mobil baru berkualitas dengan harga yang bersaing dengan perusahaan lain
                ditambah beragam pilihan untuk menemukan mobil ideal anda </p>
                
            </div>
            <div class="col-md-9 footer-right">
                <div class="sign-grds">
                    <div class="col-md-4 sign-gd">
                        <h4>Our <span>Information</span> </h4>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/contact">Contact</a></li>
                             <li><a href="/catalog">Catalog Mobil</a></li>
                        </ul>
                    </div>

                    <div class="col-md-5 sign-gd-two">
                        <h4>Dealer <span>Information</span></h4>
                        <div class="address">
                            <div class="address-grid">
                                <div class="address-left">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="address-right">
                                    <h6>Phone Number</h6>
                                    <p>+62 89618369515</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="address-grid">
                                <div class="address-left">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <div class="address-right">
                                    <h6>Email Address</h6>
                                    <p>Email :<a href="abahripuh@gmail.com"> abahripuh@gmail.com</a></p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <div class="address-grid">
                                <div class="address-left">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="address-right">
                                    <h6>Location</h6>
                                    <p>Jl.soekarno hatta, Sukapura, Kiaracondong, Kota Bandung, Jawa Barat 40285

                                    </p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                           
                        </div>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>

            

            <p class="copy-right-w3ls-agileits">&copy 2018 Smk Assalaam Bandung | Fajar Permana | Rekayasa Perangkat Lunak | Ujikom</p>
        </div>
    </div>
    </div>
		@include('frontend.about.js')

</body>

</html>