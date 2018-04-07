 
@extends('layouts.zontal')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="page-title-box">
           
              <ol class="breadcrumb p-0 m-0">
                  
                  <li>
                      <a href="{{ route('Merek.index') }}">Administrator </a>
                  </li>
                  <li class="active">
                      Tambah Merek
                  </li>
              </ol>
              <div class="clearfix"></div>
          </div>
    </div>
  </div>
  <div class="panel panel-default">
                        <div class="panel-heading">
                           Tambah Merek
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
  <form method="post" action="{{route('Merek.store') }}" id="form-guru" enctype="multipart/form-data" files="true">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-xs-12">
        <div class="card-box">

        

  <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Masukan Merek yg akan Ditambahkan<span class="text-danger">*</span></label>
                <input type="text" name="namamerek" class="form-control" placeholder=" " required="required">
                <span class="help-block"></span>
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