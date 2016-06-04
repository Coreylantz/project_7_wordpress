$(function(){

	console.log("It's working");



	/*
	*  new_map
	*
	*  This function will render a Google Map onto the selected jQuery element
	*
	*  @type	function
	*  @date	8/11/2013
	*  @since	4.3.0
	*
	*  @param	$el (jQuery element)
	*  @return	n/a
	*/

	function new_map( $el ) {
		
		// var
		var $markers = $el.find('.marker');
		
		
		// vars
		var args = {
			zoom		: 16,
			center		: new google.maps.LatLng(0, 0),
			mapTypeId	: google.maps.MapTypeId.ROADMAP
		};
		
		
		// create map	        	
		var map = new google.maps.Map( $el[0], args);
		
		
		// add a markers reference
		map.markers = [];
		
		
		// add markers
		$markers.each(function(){
			
	    	add_marker( $(this), map );
			
		});
		
		
		// center map
		center_map( map );
		
		
		// return
		return map;
		
	}

});