@extends('layouts.zontal')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/Berita') }}">Administrator</a></li>
				<li class="active">Berita</li>
			</ul>
	


				<div class="panel panel-default">
                        <div class="panel-heading">
                           Berita
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">


		
					<p><a class="btn btn-default" href="{{ route('Berita.create') }}">Tambah</a></p>
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Isi berita</th>
								<th>Gambar</th>
								
								
								<th style="column-span: 2">Action</th>
							</tr>
						</thead>
						<tbody>

						@php
                        $berita = App\Berita::paginate(2);
                        @endphp
								

							@foreach($berita as $data)
							<tr>
								<td>{{$data->id}}</td>
								
								<td>{{$data->judul}}</td>
								
								<td>{!!$data->isi!!}</td>

								<td><img src="{{ asset('/img/'.$data->foto.'') }}" width="100px" height="100px"  ></td>
																

								<td>
									<form class="delete" action="{{route('Berita.destroy', $data->id)}}" method="POST">
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
					<center>{{ $berita->links() }}</center>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

