@extends('layouts.zontal')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/Catalog') }}">Administrator</a></li>
				<li class="active">Catalog mobil	</li>
			</ul>
	


				<div class="panel panel-default">
                        <div class="panel-heading">
                           Catalog Mobil
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">


		
					<p><a class="btn btn-default" href="{{ route('Catalog.create') }}">Tambah</a></p>
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Merek</th>
								<th>Tipe</th>
								<th>Foto</th>
								<th style="column-span: 2">Action</th>
							</tr>
						</thead>
						<tbody>

						@php
                        $mobil = App\Mobil::paginate(5);
                        @endphp
								

							@foreach($mobil as $data)
							<tr>
								<td>{{$data->id}}</td>
								<td>{{$data->nama}}</td>
								<td>{{$data->merekks->namamerek}}</td>
								<td>{{$data->tipe}}</td>
								<td><img src="{{ asset('/img/'.$data->foto.'') }}" width="100px" height="50px"  ></td>
								<td><a href="{{route('Catalog.edit', $data->id) }}" class="btn btn-default">Ubah</a></td>

								<td>
									<form class="delete" action="{{route('Catalog.destroy', $data->id)}}" method="POST">
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
					<center>{{ $mobil->links() }}</center>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

