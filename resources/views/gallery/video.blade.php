@extends('layouts.admin')
@section('content')
    <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Agregar Video</h1>
    </div>
    <div class="col-md-10">
        @include('errors.errors')

            {!! Form::open(['route'=> 'admin.video.store', 'method' => 'POST']) !!}
                {!!Form::text('image',null,['class'=>'form-control','placeholder'=>'URL del Video'])!!}
                {!!Form::submit('Crear',['class'=>'btn btn-success'])!!}
            {!! Form::close() !!}
    </div>
    @endsection
@section('scripts')
    
@endsection