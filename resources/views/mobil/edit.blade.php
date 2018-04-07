@extends('layouts.zontal')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="page-title-box">
              
              <ol class="breadcrumb p-0 m-0">
                  
                  <li>
                      <a href="{{ route('Catalog.index') }}">Administrator </a>
                  </li>
                  <li class="active">
                     Edit Catalog Mobil
                  </li>
              </ol>
              <div class="clearfix"></div>
          </div>
    </div>
  </div>

  <div class="panel panel-default">
                        <div class="panel-heading">
                           Edit Catalog Mobil
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
  <form method="post" action="{{route('Catalog.update',$mobil->id) }}" id="form-guru" enctype="multipart/form-data" files="true">
    <input type="hidden" name="_method" value="PATCH">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-xs-12">
        <div class="card-box">
        
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Catalog Name<span class="text-danger">*</span></label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" required="" value="{{$mobil->nama}}">
                <span class="help-block"></span>
              </div>
            </div>

                   <div class="col-md-6">
              <div class="form-group">

               

                <label class="control-label">Foto<span class="">*</span></label>
                <img src="{{asset('/img'.$mobil->foto)}}">
                <input type="file" name="foto" class="form-control" >
                <span class="help-block"></span>
              </div>
            </div>

           <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Merek<span class="text-danger">*</span></label>
                <select name="merekks_id" class="form-control">
                  @foreach($merk as $data)
                  <option value="{{$data->id}}">
                    {{$data->namamerek}}
                  </option>
                  @endforeach
                </select>
                <span class="help-block"></span>
              </div>
            </div>

     

           <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Model<span class="text-danger">*</span></label>
                <input type="text" name="tipe" class="form-control" placeholder="Model" required="required" value="{{$mobil->tipe}}">
                <span class="help-block"></span>
              </div>
            </div>
            
          </div>
          </div>
      </div>

      <div class="col-xs-12">
        <div class="card-box">
          <div class="row">
            <div class="col-md-12">
              <hr>
              <div class="pull-right">
                <button class="btn btn-default btn-bordered waves-effect waves-light" type="reset">Reset</button>
                <button class="btn btn-default btn-bordered waves-effect waves-light" type="submit">Simpan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

@endsection