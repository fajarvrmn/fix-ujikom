
<!DOCTYPE html>
<html lang="zxx">

<head>
	@include('frontend.head')
</head>

<body>

<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="/"><span>CARS</span> <i>Zone</i></a></h1>
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
		
				
			</div>
		</div>

		
	
		<div class="clearfix"></div>
		
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="/">Home</a><i>|</i></li>
					<li>Catalog</li>
				</ul>
			</div>
		</div>

	</div>


	<div class="ads-grid_shop">
		<div class="shop_inner_inf">

			<div class="side-bar col-md-3">
	
				<div class="left-side">
					
					<h3 class="agileits-sear-head"><font color="red">Filter Berdasarkan Merek : </font></h3>
					<ul>

						@php
                        $merk = App\Merekk::all();
                        @endphp

						@foreach($merk as $data)
						<li>
							<b><a class="span" href="{{route('showperkategori',$data->id)}}" ><font color="black"> > {{$data->namamerek}} </font></a></b>
						</li>
						@endforeach

						<br><br>
						<li>
							<b><a class="span" href="/catalog" ><font color="red">Semua </font></a></b>
						</li>

					
					</ul>
				</div>
				

			</div>
		
			<div class="left-ads-display col-md-9">
				<div class="wrapper_top_shop">
				
				
					<div class="product-sec1">
								
															
     					@php
                        $mobil = App\Mobil::paginate(9);
                        @endphp
								
								@foreach($filter as $data)

									<div class="col-md-4 product-men">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="{{ asset('/img/'.$data->foto.'') }}" style="width: 220px; height: 250px;"  alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="/viewdetail/{{$data->id}}" class="link-product-add-cart">View Detail</a>
											</div>
										</div>
										
									</div>
									<div class="item-info-product">
										<h4>
									
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="nama ">
															<p></a> <a href="/viewdetail/{{$data->id}}"> <font color="red"  ><b> <center>{{$data->merekks->namamerek}} {{$data->tipe}}</center> </b></font></a></span>
													</div>
												</div>
												
											</div>
											<div class="shoe single-item hvr-outline-out">
												

											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>


							@endforeach

							<p><center>{{ $mobil->links() }}</center></p>

	
						<div class="clearfix"></div>

					</div>

					
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	@include('frontend.footer')

@include('frontend.script')


</body>

</html>