// JavaScript Document
function initialize() {
  	var mapCanvas = document.getElementById('map');

    var mapOptions = {
      center: new google.maps.LatLng(50.5856164,137.0651095),
      disableDefaultUI: true,
      scrollwheel: false,
      zoom: 17,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    //Create map
    var map = new google.maps.Map(mapCanvas, mapOptions);

    //Create marker
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(50.5855064,137.0656095),
      map: map,
      title: 'Студия Мандарин',
      icon: 'images/marker.png'
 	});

    //Map marker info
    var contentString = '<div id="map-info">'+
      '<h3>Салон "Мандарин"</h3>'+
      '<p style="text-align:left; margin:0;"><b>Ваш личный парикмахер-стилист..</p>'+
      '</div>';

    //Add info to marker 
	var infowindow = new google.maps.InfoWindow({
	  content: contentString
	});

	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	});

    //Keep map centered
    google.maps.event.addDomListener(window, 'resize', function() {
    	var center = map.getCenter();
    	google.maps.event.trigger(map, "resize");
    	map.setCenter(center); 
	});
  }
  google.maps.event.addDomListener(window, 'load', initialize);
