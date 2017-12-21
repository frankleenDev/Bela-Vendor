<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	    <link rel="stylesheet" type="text/css" href="css/style.css">
	    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>


	    <script src = "js/bootsrap.js"></script>
	    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
	    <script src="js/jquery.js"></script>
</head>
<body>

	<div id="coverage" class="row" style="background-attachment: fixed;">
		<div class="col-md-12" id="map" style="height: 100vh;z-index: 100; position: absolute;">
			
		</div>
		<div class="col-md-6" style="height: 60vh;margin-top: 40vh; background-color: white;z-index: 1000; position: relative;" >
				<div class="col-md-10 col-md-offset-1" style="border:solid 1px #dbdbdb;margin-top: 10vh">
                    <div class="row" style="height: 10vh;background-color: #">
                        <center><h2>Coverage</h2></center>
                    </div>
                    <div class="col-md-12" style="height: 35vh">
                        <center style="margin-top: 10vh">
                            <span style="font-size: 135%" >
                                On the above map representation we have set markers that show areas that the 
                                <span style="color: #b43db8"> Bela Vendor </span> machine is currently serving. The mission is by next
                                is to cover more schools at an exponential growth and eventually national wide.
                            </span>
                        </center>
                    </div>
                    <div class="col-md-12">
                      <center><span>* Clicking on a marker reveals a title.</span></center>
                    </div>
                </div>
			</div>
	</div>

  	<script type="text/javascript">
    var locations = [
      ['Changombe Secondary Schools', -6.8492366, 39.271656, 4],
      ['Tambaza Secondary Schools', -6.8018691,39.2746408, 3]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: new google.maps.LatLng(-6.8280906,39.1910649),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>

  <!--

	<script>
      function initMap() {
        var Changombe = {lat: -6.8492366, lng: 39.271656};
        var Jangwani = {lat: -6.8120169, lng: 39.2708682};
        var central = {lat: -6.8249669, lng: 39.2000798};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: central
        });
        var marker = new google.maps.Marker({
          position: Changombe,
          map: map
        });
      }
    </script>-->

   

</body>
</html>