<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>

@include('frontend.contact.head')

</head>

<body>

@include('frontend.contact.bannerr')


	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<h3 class="head">Contact Us</h3>
			<p class="head_para">carszone</p>
			<div class="inner_section_w3ls">
				<div class="col-md-7 contact_grid_right">
					<h6>Silahkan isi untuk pertanyaan,kritik dan saran.</h6>
					
					@include('frontend.contact.form')

				</div>
			
				<div class="col-md-5 contact-left">
					
					@include('frontend.contact.kontak')
					
				</div>
				<div class="clearfix"> </div>

			</div>

			<div class="clearfix"></div>

		</div>
	</div>

	@include('frontend.contact.map')

	@include('frontend.footer')

	@include('frontend.contact.script')


</body>

</html>