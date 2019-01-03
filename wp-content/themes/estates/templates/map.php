<section id="map-wrapper">
  <div id="map"></div>
</section>

<script type="text/javascript">
  var options = {
    center: {lat: 47.672229, lng: -117.091243},
    zoom: 15,
    disableDefaultUI: true,
    scrollwheel: false,
    draggable: false,
    styles: [{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#dadada"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]}]
  }

  var map;
  function initMap(){
    map = new google.maps.Map(document.getElementById('map'), options);

    var image = "<?= get_template_directory_uri(); ?>/dist/images/map-marker.png";

    var officeMarker = new google.maps.Marker({
      position: {lat: 47.672229, lng: -117.091243},
      map: map,
      icon: image,
    });

    var url = "https://maps.google.com/maps?q=23403%20East%20Mission%20Avenue%2C%20Suite%20205%2C%20Liberty%20Lake%2C%20WA%2099019&t=&z=13&ie=UTF8&iwloc=&output=embed";

    officeMarker.addListener('click', function() {
      window.open(url);
    });
  }
</script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-v9X9zkCbLxpT3TM1GlBeNFQtB5Seu-c&callback=initMap" async defer></script>

