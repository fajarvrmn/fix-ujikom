@extends('layouts.zontal')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator</a></li>
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
								<th>Nama</th>
								
								
							</tr>
						</thead>
						<tbody>
							@foreach($merekkk as $data)
							<tr>
								<td>{{$data->namamerek}}</td>
								

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
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

