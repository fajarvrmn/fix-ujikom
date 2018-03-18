@extends('layouts.zontal')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="page-title-box">
              
              <ol class="breadcrumb p-0 m-0">
                  
                   
                  <li>
                      <a href="{{ route('Detail.index') }}">Administrator </a>
                  </li>
                  <li class="active">
                     Edit Detail Catalog
                  </li>
              </ol>
              <div class="clearfix"></div>
          </div>
    </div>
  </div>

  <div class="panel panel-default">
                        <div class="panel-heading">
                           Edit Detail Catalog
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
  <form method="post" action="{{route('Detail.update',$detail->id) }}" id="form-guru" enctype="multipart/form-data" >
    <input type="hidden" name="_method" value="PATCH">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-xs-12">
        <div class="card-box">
    
            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Kondisi<span class="text-danger">*</span></label>
                <input type="text" name="keadaan" class="form-control"  required="required" value="{{$detail->keadaan}}">
                <span class="help-block"></span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Transmisi<span class="text-danger">*</span></label>
                <input type="text" name="transmisi" class="form-control" placeholder="" required="required" value="{{$detail->transmisi}}">
                <span class="help-block"></span>
              </div>
            </div>
          </div>

           <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Bahan Bakar<span class="text-danger">*</span></label>
                <input type="text" name="bahanbkr" class="form-control" placeholder="Bahan Bakar" required="required" value="{{$detail->bahanbkr}}">
                <span class="help-block"></span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Tahun Keluar<span class="text-danger">*</span></label>
                <input type="text" name="thnklr" class="form-control" placeholder="Tahun Keluar" required="required" value="{{$detail->thnklr}}">
                <span class="help-block"></span>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Harga<span class="text-danger">*</span></label>
                <input type="text" name="harga" class="form-control" placeholder="Harga" required="required" value="{{$detail->harga}}">
                <span class="help-block"></span>
              </div>
            </div>
            
          

            <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Motor<span class="text-danger">*</span></label>
                <select name="mobils_id" class="form-control">
                  @foreach($mobil as $data)
                  <option value="{{$data->id}}">
                    {{$data->nama}}
                  </option>
                  @endforeach
                </select>
                <span class="help-block"></span>
              </div>
            </div>

  <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Deskripsi<span class="text-danger">*</span></label>
               <textarea name="desk" class="ckeditor" placeholder="Deskripsi" required="required" value="{{$detail->desk}}"></textarea>
                
                <span class="help-block"></span>
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