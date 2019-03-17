<?php
/**
 * Created by PhpStorm.
 * User: Jacky
 * Date: 1/8/2018
 * Time: 1:56 PM
 */

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Data</title>
        <!--CSS for the page-->
        <link rel="stylesheet" href="../../styles.css">
    </head>
    <body>
    <!--The logo and top menu-->
    <a href="../../index.html"><img id="logo" src="../../logo.png" height = 50px;></a>
    <div id="nav">
        <a href="home.blade.php">Home</a>
        <a href="map.blade.php">Map</a>
        <a href="tabledata.blade.php">Data</a>
    </div>
    <div>
<?php
//Connecting to the database
$connect = new PDO("mysql:host=localhost;dbname=f7team19_homicide_data","f7team19_root","root1");

//Table result and view for the province Alberta
$queryAlberta = "SELECT * FROM `alberta2016s`";
$resultAlberta = $connect->query($queryAlberta);
$th = "<tr><th>ID</th><th>City</th><th>Homicide</th><th>First Degree Murder</th><th>Second Degree Murder</th><th>Manslaughter</th><th>Infanticide</th></tr>";
echo "<h2>Alberta</h2>";
echo "<table class='tables'>";
echo $th;
foreach ($resultAlberta as $r){
    echo "<tr><td>".$r['id']."</td><td>".$r['city']."</td><td>".$r['homicide']."</td><td>".$r['first_degree_murder']."</td><td>".$r['second_degree_murder']."</td><td>".$r['manslaughter']."</td><td>".$r['infanticide']."</td></tr>";
}
echo "</table>";

//Table result and view for the province British Columbia
$queryBC = "SELECT * FROM `british_columbia2016s`";
$resultBC = $connect->query($queryBC);
echo "<h2>British Columbia</h2>";
echo "<table class='tables'>";
echo "<tr><th>ID</th><th>City</th><th>Homicide</th><th>First Degree Murder</th><th>Second Degree Murder</th><th>Manslaughter</th><th>Infanticide</th></tr>";
foreach ($resultBC as $r){
    echo "<tr><td>".$r['id']."</td><td>".$r['city']."</td><td>".$r['homicide']."</td><td>".$r['first_degree_murder']."</td><td>".$r['second_degree_murder']."</td><td>".$r['manslaughter']."</td><td>".$r['infanticide']."</td></tr>";
}
echo "</table>";

//Table result and view for the province Manitoba
$queryManitoba = "SELECT * FROM `manitoba2016s`";
$resultManitoba = $connect->query($queryManitoba);
echo "<h2>Manitoba</h2>";
echo "<table class='tables'>";
echo "<tr><th>ID</th><th>City</th><th>Homicide</th><th>First Degree Murder</th><th>Second Degree Murder</th><th>Manslaughter</th><th>Infanticide</th></tr>";
foreach ($resultManitoba as $r){
    echo "<tr><td>".$r['id']."</td><td>".$r['city']."</td><td>".$r['homicide']."</td><td>".$r['first_degree_murder']."</td><td>".$r['second_degree_murder']."</td><td>".$r['manslaughter']."</td><td>".$r['infanticide']."</td></tr>";
}
echo "</table>";

//Table result and view for the province Newfoundland and Labrador
$queryNL = "SELECT * FROM `newfoundland_and_labrador2016s`";
$resultNL = $connect->query($queryNL);
echo "<h2>Newfoundland and Labrador</h2>";
echo "<table class='tables'>";
echo "<tr><th>ID</th><th>City</th><th>Homicide</th><th>First Degree Murder</th><th>Second Degree Murder</th><th>Manslaughter</th><th>Infanticide</th></tr>";
foreach ($resultNL as $r){
    echo "<tr><td>".$r['id']."</td><td>".$r['city']."</td><td>".$r['homicide']."</td><td>".$r['first_degree_murder']."</td><td>".$r['second_degree_murder']."</td><td>".$r['manslaughter']."</td><td>".$r['infanticide']."</td></tr>";
}
echo "</table>";

//Table result and view for the province New Brunswick
$queryNB = "SELECT * FROM `new_brunswick2016s`";
$resultNB = $connect->query($queryNB);
echo "<h2>New Brunswick</h2>";
echo "<table class='tables'>";
echo "<tr><th>ID</th><th>City</th><th>Homicide</th><th>First Degree Murder</th><th>Second Degree Murder</th><th>Manslaughter</th><th>Infanticide</th></tr>";
foreach ($resultNB as $r){
    echo "<tr><td>".$r['id']."</td><td>".$r['city']."</td><td>".$r['homicide']."</td><td>".$r['first_degree_murder']."</td><td>".$r['second_degree_murder']."</td><td>".$r['manslaughter']."</td><td>".$r['infanticide']."</td></tr>";
}
echo "</table>";

//Table result and view for the province Northwest Territories
$queryNWT = "SELECT * FROM `northwest_territories2016s`";
$resultNWT = $connect->query($queryNWT);
echo "<h2>Northwest Territories</h2>";
echo "<table class='tables'>";
echo "<tr><th>ID</th><th>City</th><th>Homicide</th><th>First Degree Murder</th><th>Second Degree Murder</th><th>Manslaughter</th><th>Infanticide</th></tr>";
foreach ($resultNWT as $r){
    echo "<tr><td>".$r['id']."</td><td>".$r['city']."</td><td>".$r['homicide']."</td><td>".$r['first_degree_murder']."</td><td>".$r['second_degree_murder']."</td><td>".$r['manslaughter']."</td><td>".$r['infanticide']."</td></tr>";
}
echo "</table>";

//Table result and view for the province Nova Scotia
$queryNS = "SELECT * FROM `nova_scotia2016s`";
$resultNS = $connect->query($queryNS);
echo "<h2>Nova Scotia</h2>";
echo "<table class='tables'>";
echo "<tr><th>ID</th><th>City</th><th>Homicide</th><th>First Degree Murder</th><th>Second Degree Murder</th><th>Manslaughter</th><th>Infanticide</th></tr>";
foreach ($resultNS as $r){
    echo "<tr><td>".$r['id']."</td><td>".$r['city']."</td><td>".$r['homicide']."</td><td>".$r['first_degree_murder']."</td><td>".$r['second_degree_murder']."</td><td>".$r['manslaughter']."</td><td>".$r['infanticide']."</td></tr>";
}
echo "</table>";

//Table result and view for the province Nunavut
$queryNunavut = "SELECT * FROM `nunavut2016s`";
$resultNunavut = $connect->query($queryNunavut);
echo "<h2>Nunavut</h2>";
echo "<table class='tables'>";
echo "<tr><th>ID</th><th>City</th><th>Homicide</th><th>First Degree Murder</th><th>Second Degree Murder</th><th>Manslaughter</th><th>Infanticide</th></tr>";
foreach ($resultNunavut as $r){
    echo "<tr><td>".$r['id']."</td><td>".$r['city']."</td><td>".$r['homicide']."</td><td>".$r['first_degree_murder']."</td><td>".$r['second_degree_murder']."</td><td>".$r['manslaughter']."</td><td>".$r['infanticide']."</td></tr>";
}
echo "</table>";

//Table result and view for the province Ontario
$queryOntario = "SELECT * FROM `ontario2016s`";
$resultOntario = $connect->query($queryOntario);
echo "<h2>Ontario</h2>";
echo "<table class='tables'>";
echo "<tr><th>ID</th><th>City</th><th>Homicide</th><th>First Degree Murder</th><th>Second Degree Murder</th><th>Manslaughter</th><th>Infanticide</th></tr>";
foreach ($resultOntario as $r){
    echo "<tr><td>".$r['id']."</td><td>".$r['city']."</td><td>".$r['homicide']."</td><td>".$r['first_degree_murder']."</td><td>".$r['second_degree_murder']."</td><td>".$r['manslaughter']."</td><td>".$r['infanticide']."</td></tr>";
}
echo "</table>";

//Table result and view for the province Prince Edward Island
$queryPEI = "SELECT * FROM `prince_edward_island2016s`";
$resultPEI = $connect->query($queryPEI);
echo "<h2>Prince Edward Island</h2>";
echo "<table class='tables'>";
echo "<tr><th>ID</th><th>City</th><th>Homicide</th><th>First Degree Murder</th><th>Second Degree Murder</th><th>Manslaughter</th><th>Infanticide</th></tr>";
foreach ($resultPEI as $r){
    echo "<tr><td>".$r['id']."</td><td>".$r['city']."</td><td>".$r['homicide']."</td><td>".$r['first_degree_murder']."</td><td>".$r['second_degree_murder']."</td><td>".$r['manslaughter']."</td><td>".$r['infanticide']."</td></tr>";
}
echo "</table>";

//Table result and view for the province Quebec
$queryQuebec = "SELECT * FROM `quebec2016s`";
$resultQuebec = $connect->query($queryQuebec);
echo "<h2>Quebec</h2>";
echo "<table class='tables'>";
echo "<tr><th>ID</th><th>City</th><th>Homicide</th><th>First Degree Murder</th><th>Second Degree Murder</th><th>Manslaughter</th><th>Infanticide</th></tr>";
foreach ($resultQuebec as $r){
    echo "<tr><td>".$r['id']."</td><td>".$r['city']."</td><td>".$r['homicide']."</td><td>".$r['first_degree_murder']."</td><td>".$r['second_degree_murder']."</td><td>".$r['manslaughter']."</td><td>".$r['infanticide']."</td></tr>";
}
echo "</table>";

//Table result and view for the province Saskatchewan
$querySaskatchewan = "SELECT * FROM `saskatchewan2016s`";
$resultSaskatchewan = $connect->query($querySaskatchewan);
echo "<h2>Saskatchewan</h2>";
echo "<table class='tables'>";
echo "<tr><th>ID</th><th>City</th><th>Homicide</th><th>First Degree Murder</th><th>Second Degree Murder</th><th>Manslaughter</th><th>Infanticide</th></tr>";
foreach ($resultSaskatchewan as $r){
    echo "<tr><td>".$r['id']."</td><td>".$r['city']."</td><td>".$r['homicide']."</td><td>".$r['first_degree_murder']."</td><td>".$r['second_degree_murder']."</td><td>".$r['manslaughter']."</td><td>".$r['infanticide']."</td></tr>";
}
echo "</table>";

//Table result and view for the province Yukon
$queryYukon = "SELECT * FROM `yukon2016s`";
$resultYukon = $connect->query($queryYukon);
echo "<h2>Yukon</h2>";
echo "<table class='tables'>";
echo "<tr><th>ID</th><th>City</th><th>Homicide</th><th>First Degree Murder</th><th>Second Degree Murder</th><th>Manslaughter</th><th>Infanticide</th></tr>";
foreach ($resultYukon as $r){
    echo "<tr><td>".$r['id']."</td><td>".$r['city']."</td><td>".$r['homicide']."</td><td>".$r['first_degree_murder']."</td><td>".$r['second_degree_murder']."</td><td>".$r['manslaughter']."</td><td>".$r['infanticide']."</td></tr>";
}
echo "</table>";
?>
</div>
</body>
</html>
