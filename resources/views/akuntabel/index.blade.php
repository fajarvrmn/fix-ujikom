@extends('layouts.zontal')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/Catalog') }}">Administrator</a></li>
				<li class="active">Management Account	</li>
			</ul>
	


				<div class="panel panel-default">
                        <div class="panel-heading">
                           Management Account
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">


		
					<p><a class="btn btn-default" href="{{ route('Account.create') }}">Tambah</a></p>
					<table class="table">
						<thead>
							<tr>
								<th>Id</th>
								<th>Username</th>
								<th>Email</th>
								<th>Password</th>
								
								<th style="column-span: 2">Action</th>
							</tr>
						</thead>
						<tbody>

							
							@foreach($akuntabel as $data)
							@if($loop->first)
							<tr>
								<td>{{$data->id}}</td>
								<td>{{$data->name}}</td>
								<td>{{$data->email}}</td>
								<td>{{$data->password}}</td>
							</tr>
							@else
							<tr>
								<td>{{$data->id}}</td>
								<td>{{$data->name}}</td>
								<td>{{$data->email}}</td>
								<td>{{$data->password}}</td>
							<td>
								<form class="delete" action="{{route('Account.destroy', $data->id)}}" method="POST">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="token">
									<button type="submit" class="btn btn-default" onclick="return confirm('Anda Yakin Akan Menghapus Data ?');" value="Delete">Hapus</i></button>
									{{csrf_field()}}
								</form>
							</td>
							</tr>
							@endif
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

