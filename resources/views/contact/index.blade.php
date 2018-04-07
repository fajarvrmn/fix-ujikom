@extends('layouts.zontal')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/Kontak') }}">Administrator</a></li>
				<li class="active">Kritik&saran	</li>
			</ul>
	


				<div class="panel panel-default">
                        <div class="panel-heading">
                           Kritik&saran
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">


		
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Subject</th>
								<th>Nama lengkap</th>
								<th>Telepon</th>
								<th>Email</th>
								<th>Pesan</th>
								
								<th style="column-span: 2; text-align: center;" a>Action</th>
							</tr>
						</thead>
						<tbody>

							
							@foreach($kon as $data)
							<tr>
								<td>{{$data->id}}</td>
								<td>{{$data->subjek}}</td>
								<td>{{$data->nama}}</td>
								<td>{{$data->telp}}</td>
								<td>{{$data->imel}}</td>
								<td>{{$data->pesan}}</td>
				
								
								<td>
									<form class="delete" action="{{route('Kontak.destroy', $data->id)}}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="token">
										<button type="submit" class="btn btn-default" onclick="return confirm('Anda Yakin Akan Menghapus Data ?');" value="Delete">Hapus</i></button>
										{{csrf_field()}}
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>	
	</div>
</div>
@endsection

