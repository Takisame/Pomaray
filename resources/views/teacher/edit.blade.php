@extends('layouts.admin')
@section('content')
	<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Editar Maestro</h1>
	</div>
	<div class="col-md-6">
			{!!Form::model($teacher,['route'=>['admin.teacher.update',$teacher],'method'=>'PUT','files'=>true,'autocomplete'=>'off'])!!}
				@include('teacher.forms.teacher')
			{!! Form::submit('Actualizar', ['class'=>'btn btn-success']) !!}
			{!!Form::close() !!}

			{!!Form::open(['route'=>['admin.teacher.destroy',$teacher->id],'method'=>'DELETE'])!!}
			{!! Form::submit('Eliminar', ['class'=>'btn btn-danger']) !!}
			{!!Form::close() !!}

	</div>
</div>
@endsection