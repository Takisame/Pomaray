function gallery()
{
	var $animThumb = $('#aniimated-thumbnials');
    if ($animThumb.length) {
        $animThumb.justifiedGallery({
            border: 6,
            margins: 0,
            lastRow: 'justify',
            rowHeight: 150
        }).on('jg.complete', function() {
            $animThumb.lightGallery({
                thumbnail: true,
                 mode: 'lg-slide-circular'
            });
        });
    }
}
$(document).on('click','.pagination a',function(e) {
	e.preventDefault();
	var page = $(this).attr('href').split('page=')[1];
	var route = '/gallery';
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
	var route = '/gallery';
	$.ajax({
		url: route,
		data: {category:category},
		type: 'GET',
		dataType: 'json',
		success: function(data){
			console.log(data);
			$('.files').empty();
			$('.files').html(data);
		    gallery();

	    
		}
	});
});


