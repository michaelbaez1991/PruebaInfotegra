@extends('layouts.app')

@section('content')
	<div id="crud" class="row justify-content-center">
		<div class="col-xl-12">
			<h1 class="page-header text-center">CRUD Laravel y Vuejs</h1>
		</div>
		<div class="col-sm-7">
			<a href="#" class="btn btn-primary text-left">Nueva tarea</a> <br><br>
			<table class="table table-hover table-striped">	
				<thead>	
					<tr>	
						<th>ID</th>
						<th>Tarea</th>
						<th colspan="2">	
							&nbsp;
						</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="keep in keeps">
						<td witdth="10px">@{{ keep.id }}</td>
						<td>@{{ keep.keep }}</td>
						<td witdth="10px">
							<a href="#" class="btn btn-warning btn-sm">Editar</a>
						</td>
						<td witdth="10px">
							<a href="#" class="btn btn-danger btn-sm">Eliminar</a>
						</td>
					</tr>
				</tbody>
			</table>	
		</div>

		<div class="col-sm-5 alert alert-primary">
			<pre>
				@{{ $data }}
			</pre>
		</div>
	</div>

@endsection
