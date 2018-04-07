@extends('layouts.zontal')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="page-title-box">
           
              <ol class="breadcrumb p-0 m-0">

                  
                  <li>
                      <a href="{{ route('Account.index') }}">Administrator</a>
                  </li>
                  <li class="active">
                      Tambah Admin
                  </li>
              </ol>
              <div class="clearfix"></div>
          </div>
    </div>
  </div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">Tambah Admin</h2>
				</div>
				<div class="panel-body">
					{!! Form::open(['url'=>route('Account.store'), 'method'=>'post', 'class'=>'form-horizontal']) !!}

					@include('akuntabel._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection