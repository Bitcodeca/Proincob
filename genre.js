//Genre Ajax Filtering
jQuery(function($)
{
	//Load posts on page load
	genre_get_posts();

	//If list item is clicked, trigger input change and add css class
	$('#genre-filter li').live('click', function(){
		var input = $(this).find('input');
		
		if ( $(this).attr('class') == 'clear-all' )
		{
			$('#genre-filter li').removeClass('selected').find('input').prop('checked',false);
			genre_get_posts();
		}
		else if (input.is(':checked'))
		{
			input.prop('checked', false);
			$(this).removeClass('selected');
		} else {
			input.prop('checked', true);
			$(this).addClass('selected');	
		}

		input.trigger("change");
	});
	
	//If input is changed, load posts
	$('#genre-filter input').live('change', function(){
		genre_get_posts(); //Load Posts
	});
	
	//Find Selected Genres
	function getSelectedGenres()
	{
		var genres = [];
	
		$("#genre-filter li input:checked").each(function() {
			var val = $(this).val();
			genres.push(val);
		});		
		
		return genres;
	}
	
	//Fire ajax request when typing in search
	$('#genre-search input.text-search').live('keyup', function(e){
		if( e.keyCode == 27 )
		{
			$(this).val('');
		}
		
		genre_get_posts(); //Load Posts
	});
	
	$('#submit-search').live('click', function(e){
		e.preventDefault();
		genre_get_posts(); //Load Posts
	});
	
	//Get Search Form Values
	function getSearchValue()
	{
		var searchValue = $('#genre-search input.text-search').val();	
		return searchValue;
	}
	
	//If pagination is clicked, load correct posts
	$('.genre-filter-navigation a').live('click', function(e){
		e.preventDefault();
		
		var url = $(this).attr('href');
		var paged = url.split('&paged=');

		genre_get_posts(paged[1]); //Load Posts (feed in paged value)
	});
	
	//Main ajax function
	function genre_get_posts(paged)
	{
		var paged_value = paged;
		var ajax_url = ajax_genre_params.ajax_url;

		$.ajax({
			type: 'GET',
			url: ajax_url,
			data: {
				action: 'genre_filter',
				genres: getSelectedGenres,
				search: getSearchValue(),
				paged: paged_value
			},
			beforeSend: function ()
			{
				//Show loader here
			},
			success: function(data)
			{
				//Hide loader here
				$('#genre-results').html(data);
			},
			error: function()
			{
				$("#genre-results").html('<p>There has been an error</p>');
			}
		});				
	}
	
});