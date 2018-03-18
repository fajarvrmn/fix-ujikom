@extends('layouts.zontal')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator</a></li>
				<li class="active">Detail Catalog	</li>
			</ul>
		

		<div class="panel panel-default">
                        <div class="panel-heading">
                           Detail Catalog
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
		
					<p><a class="btn btn-default" href="{{ route('Detail.create') }}">Tambah</a></p>
					<table class="table">
						<thead>
							<tr>
								<th>Kondisi</th>
								<th>Transmisi</th>
								<th>Bahan Bakar</th>
								<th>Tahun Keluar</th>
								<th>Harga</th>
								<th>Deskripsi</th>
								<th>Catalog Name</th>
								<th style="column-span: 2">Opsi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($detail as $data)
							<tr>
								<td>{{$data->keadaan}}</td>
								<td>{{$data->transmisi}}</td>
								<td>{{$data->bahanbkr}}</td>
								<td>{{$data->thnklr}}</td>
								<td>{{$data->harga}}</td>
								<td>{!! $data->desk !!}</td>
								<td>{{$data->mobils->nama}}</td>
								
								<td><a href="{{route('Detail.edit', $data->id) }}" class="btn btn-default">Ubah</a></td>

								<td>
									<form class="delete" action="{{route('Detail.destroy', $data->id)}}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="token">
										<button type="submot" class="btn btn-default" onclick="return confirm('Anda Yakin Akan Menghapus Data ?');" value="Delete">Hapus</i></button>
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

