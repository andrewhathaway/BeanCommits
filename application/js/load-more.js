$(function(){

	var feed = $('#feed');
	var button = $('#load-more');
	var href = button.attr('href');

	button.click(function(e){
		e.preventDefault();
		button.html("LOADING");

		//Load new items into x
		var x = $('<div/>');
		x.load(href + ' #feed', function(){
			button.html("LOAD MORE");
			//Append new items
			feed.append(x.html());	

			//Get the current page number & increment
			var page = href.match(/(\?|&)page=([0-9]+)(&|$)/i)[2];
			page = parseInt(page, 10) + 1;

			//Get base and create new href
			var base = href.split('?');
			href = base[0] + '?page=' + page;

			//Change href of button
			button.attr('href', href);
		});

	});

});