(function($, url, _) {
	$('.page').on('click', function() {
		var page = $(this).attr('data-page'),
			news = $.get(url + '/Home/posts', { page: page });
		news.done(function(data) {
			$('#news').html(data);
			setRamdonUser(); // se asignan nuevos usuarios aleatorios
			console.log(data);
		});
	});
})($, baseurl, window);
