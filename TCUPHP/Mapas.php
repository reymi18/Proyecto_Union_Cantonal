<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/style.css">
        <script src="code.js"></script>
	<script src="main.js"></script>
    </head>

     <body   background="../Imagenes/logo_ucapococi_1.png">
         <div class="contenedor">
            
         <nav class="menu1">
              <body   background="Imagenes/logo_ucapococi_1.png">
     <?php include './Interfaz/header.html'; ?>
             
     <h1> Google Map</h1>

<div id="map" style="width:100%;height:700px"></div>

<script>
function myMap() {
     var asociaciones = [
        ['Asociacion 1'],
        ['Asociacion 2'],
        ['Asociacion 3'],
        ['Asociacion 4'],
         ['Asociacion 5']
      ];
    
    
      var marcadores = [
        ['Asociacion 1', 10.217078132716047, -83.78905994983938],
        ['Asociacion 2', 9.986898183032642, -83.04887027543947],
        ['Asociacion 3', 10.209726945477804, -83.68409209418031],
        ['Asociacion 4', 10.097634997066823, -83.51017779603268],
         ['Asociacion 5', 10.079846933435942, -83.29849009999998]
      ];
      
  var myCenter = new google.maps.LatLng(9.28172991253419,-84.2569309320312);
  var mapCanvas = document.getElementById("map");
 
        var mapOptions = {center: myCenter, zoom: 8};
 
        var map = new google.maps.Map(mapCanvas, mapOptions);
  
  //Para marcar las asociaciones
       var marker, i;
      for (i = 0; i < marcadores.length; i++) {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
              //Mensaje Todavia no se ve
       infowindow = new google.maps.InfoWindow({
        content: "Hello"
             });
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
        
      
       // var marker = new google.maps.Marker({position:myCenter});
  
       // marker.setMap(map);
                }
}
    
</script>
</nav>
             </div> 


<script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyDoqUaAA3pSOW7qbQJAwWUqt-EF5xI7NOA">
</script>

</body>  
</html>
