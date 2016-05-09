@extends('layouts.admin')
@section('content')
@include('errors.errors')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Agregar Maestro</h1>
	</div>
	<div class="col-md-6">
			{!!Form::open(['route'=>'admin.teacher.store', 'method'=> 'POST', 'files'=> true,'autocomplete'=>'off']) !!}
				@include('teacher.forms.teacher')
			{!! Form::submit('Crear', ['class'=>'btn btn-success']) !!}
			{!!Form::close() !!}

	</div>
</div>
@endsection