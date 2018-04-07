									
     					@php
                        $mobil = App\Mobil::paginate(9);
                        @endphp
								
								@foreach($mobil as $data)

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