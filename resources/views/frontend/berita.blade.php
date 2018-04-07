

            <div class="newsletter_w3layouts_agile">
    <div class="col-sm-12 newsleft">
      <center><b><h1>Berita  di Carszone</h1></b></center>
    </div>
   

    <div class="clearfix"></div>
  </div>

                        @php
                        $berita = App\Berita::paginate(6);
                        @endphp
                

              @foreach($berita as $data)
            <div class="col-md-4 product-men">
              <div class="product-shoe-info shoe">
                <div class="men-pro-item">
                  <div class="men-thumb-item">
                    <img src="{{ asset('/img/'.$data->foto.'') }}" width="300px" height="250px"   alt="">
                    <div class="men-cart-pro">
                      <div class="inner-men-cart-pro">
                        <a href="/berita/{{$data->id}}" class="link-product-add-cart">Read More</a>
                      </div>
                    </div>
                                     </div>
                  <div class="item-info-product">
                    <div class="info-product-price">
                      <div class="grid_meta">
                        <div class="product_price">
                          <div class="grid-price ">
                    <h4>
                      {{$data->judul}}
                    </h4>
                   
                          </div>
                        </div>
                       
                      </div>
                      
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div> 
@endforeach
<center>{{ $berita->links() }}</center>