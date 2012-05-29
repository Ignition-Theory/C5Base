<?php  defined('C5_EXECUTE') or die("Access Denied.");

$c = Page::getCurrentPage();
if ($c->isEditMode()) { ?>
	<div class="ccm-edit-mode-disabled-item" style="height: 350px">
		<div style="padding: 80px 0px 0px 0px"><?php echo t('Google Map disabled in edit mode.')?></div>
	</div>
<?php  } else { ?>

	<style type="text/css">
	.gmap_wrapper {position: relative;}
	.googleMapCanvas{ width:100%; border:0px none; height: 400px; position: relative;}
	.googleMapCanvas img{ max-width:none;}
	.gmap_directions form {margin:0;}
	.gmap_directions label {display: block;}
	.gmap_directions {display:inline-block; position: absolute; left: 80px; top: 0; z-index: 9999; background: #fff; padding: 4px 6px; border-radius: 3px; box-shadow: rgba(0,0,0,.3) 0px 2px 2px;}
		</style>
	
	<script type="text/javascript"> 
	
	var directionsDisplay;
	var directionsService = new google.maps.DirectionsService();
	var map;
	
	function googleMapInit<?php echo $bID?>() { 
		try{
			directionsDisplay = new google.maps.DirectionsRenderer();
			var latlng = new google.maps.LatLng(<?php echo $latitude?>, <?php echo $longitude?>);
		    var mapOptions = {
		    	zoom: <?php echo $zoom?>,
		    	center: latlng,
		    	mapTypeId: google.maps.MapTypeId.ROADMAP,
				mapTypeControl: true
			};
								
		    map = new google.maps.Map(document.getElementById('googleMapCanvas<?php echo $bID?>'), mapOptions);
		    directionsDisplay.setMap(map);
		    var marker = new google.maps.Marker({
		        position: latlng, 
		        map: map
		    });
		    
		}catch(e){alert(e.message)} 
	}
	
	function calcRoute() {
		var start = document.getElementById("gmap_start<?php echo $bID?>").value;
		var end = new google.maps.LatLng(<?php echo $latitude?>, <?php echo $longitude?>);
		var request = {
			origin:start,
			destination:end,
			travelMode: google.maps.DirectionsTravelMode.DRIVING
		};
		
		directionsService.route(request, function(response, status) {
			if (status == google.maps.DirectionsStatus.OK) {
				directionsDisplay.setDirections(response);
			}
		});
	}
	</script>
	<?php  if( strlen($title)>0){ ?><h3><?php echo $title?></h3><?php  } ?>
	<div class="gmap_wrapper">
		<div class="gmap_directions">
			<form action="index.html" onsubmit="calcRoute();return false;" class="form-search">
				<label for="gmap_start<?php echo $bID?>">Get directions from: </label>
				
				<input type="submit" value="Go" class="search-block-submit btn btn-primary">
				
				<div class="search-block-input-wrapper">
				<input type="text" id="gmap_start<?php echo $bID?>" value="" class="search-query">
				</div>	
				
			</form>
		</div>
	
		<div id="googleMapCanvas<?php echo $bID?>" class="googleMapCanvas"></div>
	</div>
	<script type="text/javascript">$(function() {
		googleMapInit<?php echo $bID?>();
	});</script>
	
<?php  } ?>