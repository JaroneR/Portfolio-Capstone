<?php
/**
 * Created by PhpStorm.
 * User: Akats
 * Date: 1/06/18
 * Time: 5:36 PM
 */
//Reads csv file into an associative array
$locationArray = $fields = array(); $i = 0;
$handle = @fopen("../../location_values.csv", "r");
if ($handle) {
    while (($row = fgetcsv($handle, 4096)) !== false) {
        if (empty($fields)) {
            $fields = $row;
            continue;
        }
        foreach ($row as $key=>$value) {
            $locationArray[$i][$fields[$key]] = $value;
        }
        $i++;
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}
//Checks URL for location info from form to search the associative array for co-ordinates
$selectedLocation = array();
if (isset($_GET['location'])) {
    foreach ($locationArray as $locationInfo) {
        if ($locationInfo['Location'] == $_GET['location']) {
            $selectedLocation = $locationInfo;
            break;
        }
    }
} else {
    $selectedLocation = $locationArray[0];
}
?>
<html>
<head>
    <title>Map Prototype</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../styles.css">
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
<a href="../../index.html"><img id="logo" src="../../logo.png" height = 50px></a>
<div id="nav">
    <a href="home.blade.php">Home</a>
    <a href="map.blade.php">Map</a>
    <a href="tabledata.blade.php">Data</a>
</div>
<div class="divClass">
    <pre>
        <?php //print_r($locationArray); ?>
    </pre>
    <form action="map.blade.php" method="get" id="form">
        Location:
        <select name="location" onchange="this.form.submit()">
            <?php
            foreach($locationArray as $locationInfo):
                echo '<option value="'.$locationInfo['Location'].'"'.(isset($_GET['location']) && $_GET['location'] == $locationInfo['Location'] ? " selected>" : ">") .$locationInfo['Location'].'</option>';
            endforeach;
            ?>
        </select>
    </form>
    <p id="result"> The Location: <?php echo $selectedLocation['Location'] ?> has: <?php echo $selectedLocation['Homicide Incidents'] ?> number of homicide incidents in 2016</p>
    <div id="map" style="width:100%;height:700px;"></div>
    <script>
        function myMap() {
            var location = new google.maps.LatLng(<?php echo $selectedLocation['Latitude'] ?> , <?php echo $selectedLocation['Longitude'] ?>);
            var mapCanvas = document.getElementById("map");
            var mapOptions = {center: location, zoom: <?php echo $selectedLocation['Zoom Level'] ?>};
            var map = new google.maps.Map(mapCanvas,mapOptions);

            var myCity = new google.maps.Circle({
                center: location,
                radius: <?php echo $selectedLocation['Radius'] ?>,
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
</div>
</body>
</html>

