

<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="col-md-4 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">

						<ul class="slides">
							<li  data-thumb="{{ asset('/img/'.$DetailView->mobils->foto.'') }} ">
								<div class="thumb-image"> <img src="{{ asset('/img/'.$DetailView->mobils->foto.'') }} "  style="width: 600px; height: 370px;" data-imagezoom="true" class="img-responsive"> </div>
							</li>
						
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>


			
			<div class="col-md-8 single-right-left simpleCart_shelfItem">
				<font face="Loki Cola Regular" size="8pt" color="red">{{$DetailView->mobils->nama}}</font>
				<p><span class="item_price"><?php echo 'Rp.'. number_format($DetailView->harga, 0,",",","); ?> </span></p>
	

<div class="panel panel-default">
<div class="panel-body">
<div class="table-responsive">
<b>

	<div class="form-group">
		<div class="col-md-12"><h2>
	 	INFO MOBIL</font><br><br></h2></div>
	</div>



<h4>



<tr>
	<div class="form-group">
	<div class="col-md-6">Kondisi </div> 
	  <td class="col-md-6"><b>{{$DetailView->keadaan}}</b></td>
	</div>
</tr>

<tr>
	<div class="form-group">
	<div class="col-md-6">Transmisi </div>   
	<td class="col-md-6"><b>{{$DetailView->transmisi}}</b></td>
	</div>
</tr>

<tr>
	<div class="form-group">
	<div class="col-md-6">Tahun Keluar </div> 
	  <td class="col-md-6"><b>{{$DetailView->thnklr}}</b></td>
	</div>
</tr>


<tr>
	<div class="form-group">
	<div class="col-md-6">Bahan Bakar </div> 
	  <td class="col-md-6"><b>{{$DetailView->bahanbkr}}</b></td>
	</div>
</tr>


</h4>
</b>
				
</div>
</div>				
</div>
</div>
</div>

			<div class="clearfix"> </div>
			<!--/tabs-->
			<div class="responsive_tabs">
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li>Deskripsi</li>
						
					</ul>

					

					<div class="resp-tabs-container">
						<!--/tab_one-->
						<div class="tab1">

							<div class="single_page responsive_tabs">
							<font size="8pt" face="arial">
								<p style="text-align: justify;">{!! $DetailView->desk !!}</p>
								</font>
							</div>
						</div>
						<!--//tab_one-->
						
					</div>
				</div>
			</div>
			<!--//tabs-->
			<!-- /new_arrivals -->
			
				
				
		

				<!-- //womens -->
				<div class="clearfix"></div>
			</div>
			<!--//new_arrivals-->


		</div>
	</div>
