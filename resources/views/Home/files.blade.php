<div id="aniimated-thumbnials"  class="list-unstyled justified-gallery " >
	@if (count($files) != 0)
	@foreach ($files as $file)
	@if ($file->category != 'video')
	<a class="jg-entry" href="../images/galeria/{{$file->image}} " data-sub-html="{{$file->category}}" style="width: 187px; height: 126.144px; top: 6px; left: 6px; opacity: 1;">
		<img class="img-responsive" src="../images/galeria/{{$file->image}}" style="width: 187px; height: 127px; margin-left: -93.5px; margin-top: -63.5px;">
		<div class="demo-gallery-poster">
			<img src="../img/zoom.png">
		</div>
	</a>
	@else
	<a class="jg-entry" href="https://www.youtube.com/watch?v={{$file->image}}" data-poster="" data-sub-html="{{$file->category}}" style="width: 187px; height: 126.144px; top: 6px; left: 6px; opacity: 1;">
		<img class="img-responsive"  src="http://img.youtube.com/vi/{{$file->image}}/0.jpg" style="width: 187px; height: 127px; margin-left: -93.5px; margin-top: -63.5px;">
		<div class="demo-gallery-poster">
			<img src="../img/s2.png">
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
</div>