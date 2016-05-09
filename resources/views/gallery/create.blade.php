@extends('layouts.admin')
@section('content')
    <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Agregar Fotos</h1>
    </div>
    <div class="col-md-10">
        @include('errors.errors')

        <div class="panel panel-primary">
                <div class="panel-heading">
                    Formulario De Imagenes
                </div>
                <div class="panel-body">
                    {!! Form::open(['route'=> 'admin.gallery.store', 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}
                    <div class="dz-message" style="height:200px;">
                        Arrastre Sus Imagenes Aqui.
                    </div>
                    <div class="dropzone-previews"></div>
                    <div class="form-group">
                        {!! Form::label('category','Categoria: ') !!}
                        {!! Form::select('category', array(
                                                    'Eventos' => 'Eventos',
                                                    'Feria' => 'Ferias',
                                                    'Politecnico' => 'Politecnico'), 
                            null, ['placeholder' => 'Seleccione una Categoria','class'=>'form-control']) !!}
                    </div>
                    <button type="submit" class="btn btn-success" id="submit">Crear</button>
                    {!! Form::close() !!}
                </div>
            </div>
    </div>
    @endsection
@section('scripts')
    {!! Html::script('js/dropzone.js'); !!}
    <script>
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 5,
            maxFiles: 20,
            
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
                
                this.on("success",function (){
                    myDropzone.processQueue.bind(myDropzone);

                });
            }
        };
    </script>
@endsection