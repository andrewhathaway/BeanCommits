$(function(){

	var feed = $('#feed');
	var button = $('#load-more');
	var href = button.attr('href');

	button.click(function(e){
		e.preventDefault();
		button.html("LOADING");

		var x = $('<div/>');
		x.load(href + ' #feed', function(){
			button.html("LOAD MORE");
			feed.append(x.html());	

			var page = href.match(/(\?|&)page=([0-9]+)(&|$)/i)[2];
			page = parseInt(page, 10) + 1;

			var base = href.split('?');
			href = base[0] + '?page=' + page;
			button.attr('href', href);
		});

	});

});