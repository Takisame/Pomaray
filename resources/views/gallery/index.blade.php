@extends('layouts.admin')
@section('styles')
{!!Html::style('css/lightgallery.css')!!}
{!!Html::style('css/lg-transitions.css')!!}
{!!Html::style('css/justifiedGallery.min.css')!!}
{!!Html::style('css/lg-animations.css')!!}
{!!Html::style('css/main.css')!!}
@endsection
@section('content')
@if (Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	{{Session::get('message')}}
</div>
@endif
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Fotos y Videos</h1>
	</div>
	<div class="col-md-12">
		<div class="controls">
			<label>Categorias:</label>
			<button class="category active" value="*">Todos</button>
			<button class="category" value="Feria">Ferias</button>
			<button class="category" value="Eventos">Eventos</button>
			<button class="category" value="Politecnico">Politecnico</button>
			<button class="category" value="video">Videos</button>
			<a class="btn btn-default" href="{!!URL::to('/gallery')!!}">Ir a Galeria</a>

		</div>
		<section class="section files" >
			<div class="container-fluid">
				<div class=" demo-gallery mrb50">
					<div id="aniimated-thumbnials"  class="list-unstyled justified-gallery " >
						@if (count($files) != 0)
							@foreach ($files as $file)
						
								@if ($file->category != 'video')
								<a class="jg-entry eliminar" href="#" data-id="{{$file->id}}" style="width: 187px; height: 126.144px; top: 6px; left: 6px; opacity: 1;">
									<img class="img-responsive" src="../images/galeria/{{$file->image}}" style="width: 187px; height: 127px; margin-left: -93.5px; margin-top: -63.5px;">
									<div class="demo-gallery-poster">
										<img src="../img/delete.png">
									</div>
								</a>
								@else
								<a class="jg-entry eliminar" data-id="{{$file->id}}" href="#" style="width: 187px; height: 126.144px; top: 6px; left: 6px; opacity: 1;">
									<img class="img-responsive"  src="http://img.youtube.com/vi/{{$file->image}}/0.jpg" style="width: 187px; height: 127px; margin-left: -93.5px; margin-top: -63.5px;">
									<div class="demo-gallery-poster">
										<img src="../img/delete.png">
									</div>
								</a>
								@endif
							@endforeach	
						@else
							<center>
								<br>
								<h3>No Hay Imagenes</h3>
							</center>
						@endif
						
						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
					</div>
				</div>
			</div>
			<center>
				{!!$files->render()!!}
			</center>

		</section>
	</div>

</div>
@endsection
@section('scripts')
{!!Html::script('js/lg/jquery.justifiedGallery.min.js')!!}
{!!Html::script('js/lg/lightgallery.js')!!}
{!!Html::script('js/lg/transition.js')!!}
{!!Html::script('js/lg/lg-fullscreen.js')!!}
{!!Html::script('js/lg/lg-thumbnail.js')!!}
{!!Html::script('js/lg/lg-video.js')!!}
{!!Html::script('js/lg/lg-autoplay.js')!!}
{!!Html::script('js/lg/lg-zoom.js')!!}
{!!Html::script('js/lg/lg-hash.js')!!}
{!!Html::script('js/lg/lg-pager.js')!!}
{!!Html::script('js/lg/jquery.mousewheel.min.js')!!}
{!!Html::script('js/gallery.js')!!}
<script type="text/javascript">
	$(document).ready(function(){
		gallery();
	});		
</script>


@endsection