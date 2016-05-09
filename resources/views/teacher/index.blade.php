@extends('layouts.admin')
@section('content')
@if (Session::has('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		{{Session::get('message')}}
	</div>
@endif
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Maestros</h1>
	</div>
</div>  
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Tabla de Maestros</div>
			<div class="panel-body">
			<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
				<div class="dataTable_wrapper">
					<table width="100%" class="table table-condensed table-hover" >
						<thead>
							<tr>
								<th>Imagen</th>
								<th>Nombre</th>
								<th>Tecnica</th>
								<th>Curso</th>
								<th>Telefono</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
						@if (count($teachers) != 0)
							@foreach ($teachers as $teacher)
								<tr>
									<td><img src="../images/teacher/{{$teacher->image}}" class="img-circle" width="75px"></td>
									<td>{{$teacher->name}}</td>
									<td>{{$teacher->technique}}</td>
									<td>{{$teacher->course}}</td>
									<td>{{$teacher->celPhone}}</td>
									<td>{!!link_to_route('admin.teacher.edit', $title = 'Editar', $parameters = [$teacher->id], $attributes = ['class'=>'btn btn-primary']);!!} </td>
										
								</tr>
							@endforeach
						@else
							<tr>
								<td colspan="6">
									<center>
										<h3>No Hay Maestros</h3>
									</center>
								</td>
							</tr>
						@endif
							
						</tbody>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<script>
	
</script>
@endsection
@section('script')
{!!Html::script('js/crud.js')!!}
@endsection