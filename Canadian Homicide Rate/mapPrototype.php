<?php
/**
 * Created by PhpStorm.
 * User: Akats
 * Date: 1/06/18
 * Time: 5:36 PM
 */

$location =[
    ["Location","Latitude","Longitude","Zoom Level","Radius" ,"Homicide Incident"],
    ["Canada",56.1304,-106.3468,5,1500000,611],
    ["Newfoundland and Labrador",54.4045,-60.3403,5,500000,7],
    ["St. Johns, Newfoundland and Labrador",47.492,-52.8009,11,10000,4],
    ["Prince Edward Island",46.4169,-63.2022,8,100000,0],
    ["Nova Scotia", 45.1064,-63.0264,8,200000,13],
    ["Halifax, Nova Scotia",44.6555,-63.6199,12,5000,12],
    ["New Brunswick",46.623,-66.143,6,200000,11],
    ["Moncton, New Brunswick",46.111,-64.8033,12,5000,1],
    ["Saint John, New Brunswick",45.2802,-66.0617,11,10000,3],
    ["Quebec",53.9921,-71.2296,5,700000,67],
    ["Saguenay, Quebec",48.3908,-71.1308,11,10000,2],
    ["Quebec, Quebec",46.8069,-71.2073,11,10000,1],
    ["Sherbrooke, Quebec",45.4025,-71.9171,11,10000,2],
    ["Trois Rivieres, Quebec",46.3739,-72.6074,11,9000,0],
    ["Montreal, Quebec",45.52,-73.6506,11,10000,42],
    ["Ontario",50.5523,-85.0285,5,700000,206],
    ["Kingston Ontario" ,44.289661,-76.438869,10,10000,0],
    ["Peterborough Ontario",44.30669,-78.32111,12,5000,2],
    ["Toronto ,Ontario",43.6697,-79.3222,10,18000,96],
    ["Hamilton, Ontario",43.2612,-79.9372,10,14000,12],
    ["St Catherines Niagara, Ontario",43.1055,-79.1731,10,14000,1],
    ["Kitchener-Cambridge-Waterloo, Ontario ",43.41624,-80.40743,11,13000,6],
    ["Brantford, Ontario",43.14923,-80.26788,12,6000,4],
    ["Guelph, Ontario",43.53042,-80.2271,12,6500,1],
    ["London, Ontario",42.9483,-81.215,11,10000,8],
    ["Windsor, Ontario",42.2855,-82.9973,12,7000,3],
    ["Barrie, Ontario,",44.3583,-79.6719,12,5500,2],
    ["Sudbury, Ontario",46.4962,-80.9857,11,10000,0],
    ["Thunder Bay, Ontario",48.4084,-89.2556,12,7000,8],
    ["Manitoba",54.6199,-96.7858,5,650000,42],
    ["Winnipeg, Manitoba",49.8661,-97.1481,11,10000,25],
    ["Saskatchewan" ,54.5,-106.01433,5,620000,54],
    ["Regina, Saskatchewan",50.4566,-104.6251,11,10000,8],
    ["Saskatoon, Saskatchewan",52.14,-106.6412,11,10000,10],
    ["Alberta",54.62,-114.5913,5,600000,116],
    ["Calgary, Alberta",51.0486,-114.0708,11,10000,33],
    ["Edmonton, Alberta",53.5444,-113.4909,11,10000,47],
    ["British Columbia",54.37,-127.037,5,620000,87],
    ["Kelowna, British Columbia",49.888,-119.496,11,10000,5],
    ["Abbotsford Mission, British Columbia",49.0704,-122.3045,11,10000,6],
    ["Vancouver, British Columbia",49.2523,-123.1108,11,9000,41],
    ["Victoria, British Columbia",48.4547,-123.3556,12,5000,1],
    ["Yukon",63.304,-135.2205,5,510000,4],
    ["Northwest Territories",64.896,-119.8969,5,480000,3],
    ["Nunavut",68.0969,-91.781,4,760000,1]];

?>
<html>
<head>
    <title>Map Prototype</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style type="text/css">
        .divClass {
            margin: 0 auto;
            padding: 25px;
            width: 75%;
            height: 75%;
        }
    </style>
</head>
<body>
<div class="divClass">
    <div id="map" style="width:100%;height:700px;"></div>
    <script>
        function myMap() {
            var amsterdam = new google.maps.LatLng(52.395715,4.888916);

            var mapCanvas = document.getElementById("map");
            var mapOptions = {center: amsterdam, zoom: 7};
            var map = new google.maps.Map(mapCanvas,mapOptions);

            var myCity = new google.maps.Circle({
                center: amsterdam,
                radius: 50000,
                strokeColor: "#0000FF",
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: "#0000FF",
                fillOpacity: 0.4
            });
            myCity.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpQF21tgeQFhknXqoH5iJY9Y16hLaGlDU&callback=myMap"></script>
    <p>Text below the map, testing</p>
</div>
</body>
</html>

