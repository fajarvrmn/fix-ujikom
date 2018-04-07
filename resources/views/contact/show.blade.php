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
@php
$kon=Contact::all();
@endphp
                                	@foreach($kon as $data)

<tr>
	<td>nama</td> <td>{{ $data->desk }}</td>
</tr>
<tr>
	<td>nama</td>
</tr>
	
                                		
						@endforeach
					</table>
				</div>
			</div>
		</div>	
	</div>
</div>
@endsection

