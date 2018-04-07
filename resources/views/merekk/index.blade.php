@extends('layouts.zontal')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator</a></li>
				<li class="active">Merek mobil	</li>
			</ul>
	


				<div class="panel panel-default">
                        <div class="panel-heading">
                           Merek Mobil
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">


		
					<p><a class="btn btn-default" href="{{ route('Merek.create') }}">Tambah</a></p>
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Action</th>
								
								
							</tr>
						</thead>
						<tbody>
							@php
                        $merekkk = App\Merekk::paginate(5);
                        @endphp

							@foreach($merekkk as $data)
							<tr>
								<td>{{$data->id}}</td>
								<td>{{$data->namamerek}}</td>
								

								<td>
									<form class="delete" action="{{route('Merek.destroy', $data->id)}}" method="POST">
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
					<center>{{ $merekkk->links() }}</center>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

