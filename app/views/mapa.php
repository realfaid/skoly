<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>

   <style>
#map {
    width: 100%;
    height: 100vh;
}

    </style>
    </head>
    <body>
        <div id="map"></div>
    </body>
</html>



<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script>

var map = L.map('map').setView([49.03, 17.6], 12);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);


</script>

<?php foreach ($skoly as $row) { ?>
    <script>var marker = L.marker([<?php echo $row['geo-lat']; ?>, <?php echo $row['geo-long']; ?>]).addTo(map).bindPopup('<?php echo $row['skola']; ?>');; </script>
<?php  } ?>