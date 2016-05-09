function gallery()
{
	var $animThumb = $('#aniimated-thumbnials');
    if ($animThumb.length) {
        $animThumb.justifiedGallery({
            border: 6,
            margins: 0,
            lastRow: 'justify',
            rowHeight: 150
        });
    }
}
$(document).on('click','.pagination a',function(e) {
	e.preventDefault();
	var page = $(this).attr('href').split('page=')[1];
	var route = '/admin/gallery';
			console.log(page);
	$.ajax({
		url: route,
		data: {page: page},
		type: 'GET',
		dataType: 'json',
		success: function(data){
			$('.files').empty();
			$('.files').html(data);
			gallery();
		}
	});
});

$(document).on('click','.category',function(e) {
	e.preventDefault();
	$(this).addClass('active');
	$(this).siblings().removeClass('active');
	var category = $(this).attr('value');
	var route = '/admin/gallery';
	$.ajax({
		url: route,
		data: {category:category},
		type: 'GET',
		dataType: 'json',
		success: function(data){
			$('.files').empty();
			$('.files').html(data);
		    gallery();

	    
		}
	});
});

$(document).on('click','.eliminar',function(e) {
	e.preventDefault();
	var element = $(this);
	// var token = element.children('.token').val();
	var token = $('#token').val();
	var value = $(this).attr('data-id');
	var route = '/admin/gallery/'+value+'';
	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function(){
			element.remove();
			gallery();
		}
	});
});