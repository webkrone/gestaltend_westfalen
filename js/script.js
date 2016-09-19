// Westfalen theme scripts
jQuery(document).ready(function($){
 // Defining a function to set size for #hero 
    function fullscreen(){
        jQuery('#hero').css({
            width: jQuery(window).width(),
            height: jQuery(window).height()
        });
    }
  
    fullscreen();
  // Run the function in case of window resize
  jQuery(window).resize(function() {
       fullscreen();         
    });

$(document).on("scroll",function(){
    if($(document).scrollTop()>350){
        $("nav").removeClass("large").addClass("nav-small");
    } else{
        $("nav").removeClass("nav-small").addClass("large");
    }
    console.log('working');

});

    function init_map() {
    var var_location = new google.maps.LatLng(45.430817,12.331516);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
 
    var var_marker = new google.maps.Marker({
      position: var_location,
      map: var_map,
      title:"Venice"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
    var_marker.setMap(var_map); 
 
      }
 
    google.maps.event.addDomListener(window, 'load', init_map);  

});