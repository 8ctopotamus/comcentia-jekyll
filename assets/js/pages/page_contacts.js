var ContactPage = function () {

    return {
        
    	//Basic Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				scrollwheel: false,				
				lat: 43.234948,
				lng: -87.921545
			  });
			  
			  var marker = map.addMarker({
				lat: 43.234948,
				lng: -87.921545,
	            title: 'Comcentia'
		       });
			});
        },

        //Panorama Map
        initPanorama: function () {
		    var panorama;
		    $(document).ready(function(){
		      panorama = GMaps.createPanorama({
		        el: '#panorama',
				lat: 43.234948,
				lng: -87.921545
		      });
		    });
		}        

    };
}();