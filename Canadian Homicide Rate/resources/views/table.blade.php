<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    
</head>
<body>
<img src="../../logo.png" height = 50px;>
	</a>
	<div id="Nav">
		<a href="home.blade.php">Home</a>
		<a href="map.blade.php">Map</a>
		<a href="table.blade.php">Data</a>
	</div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-default">
                <div class="panel-heading">Alberta 2016</div>
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>City</td>
                        <td>Homicides</td>
                        <td>First Degree Murder</td>
                        <td>Second Degree Murder</td>
                        <td>Manslaughter</td>
                        <td>Infanticide</td>
                    </tr>


                    
                    <tr>
                        <td><?php echo $alberta2016s; ?></td>
                        <td><?php echo $alberta2016 -> city ?></td>
                        <td><?php echo $alberta2016 -> homicide ?></td>
                        <td><?php echo $alberta2016 -> first_degree_murder ?></td>
                        <td><?php echo $alberta2016 -> second_degree_murder ?></td>
                        <td><?php echo $alberta2016 -> manslaughter ?></td>
                        <td><?php echo $alberta2016 -> infanticide ?></td>
                    </tr>
                    

                </table>
            </div>
        </div>
    </div>
</div>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-default">
                <div class="panel-heading">British Columbia 2016</div>
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>City</td>
                        <td>Homicides</td>
                        <td>First Degree Murder</td>
                        <td>Second Degree Murder</td>
                        <td>Manslaughter</td>
                        <td>Infanticide</td>
                    </tr>
                    <?php
                    foreach($british_columbia2016s as $british_columbia2016){
                    ?>
                    <tr>
                        <td><?php echo $british_columbia2016 -> id ?></td>
                        <td><?php echo $british_columbia2016 -> city ?></td>
                        <td><?php echo $british_columbia2016 -> homicide ?></td>
                        <td><?php echo $british_columbia2016 -> first_degree_murder ?></td>
                        <td><?php echo $british_columbia2016 -> second_degree_murder ?></td>
                        <td><?php echo $british_columbia2016 -> manslaughter ?></td>
                        <td><?php echo $british_columbia2016 -> infanticide ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-default">
                <div class="panel-heading">Manitoba 2016</div>
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>City</td>
                        <td>Homicides</td>
                        <td>First Degree Murder</td>
                        <td>Second Degree Murder</td>
                        <td>Manslaughter</td>
                        <td>Infanticide</td>
                    </tr>
                    <?php
                    foreach($manitoba2016s as $manitoba2016){
                    ?>
                    <tr>
                        <td><?php echo $manitoba2016 -> id ?></td>
                        <td><?php echo $manitoba2016 -> city ?></td>
                        <td><?php echo $manitoba2016 -> homicide ?></td>
                        <td><?php echo $manitoba2016 -> first_degree_murder ?></td>
                        <td><?php echo $manitoba2016 -> second_degree_murder ?></td>
                        <td><?php echo $manitoba2016 -> manslaughter ?></td>
                        <td><?php echo $manitoba2016 -> infanticide ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-default">
                <div class="panel-heading">Newfoundland and Labrador 2016</div>
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>City</td>
                        <td>Homicides</td>
                        <td>First Degree Murder</td>
                        <td>Second Degree Murder</td>
                        <td>Manslaughter</td>
                        <td>Infanticide</td>
                    </tr>
                    <?php
                    foreach($newfoundland_and_labrador2016s as $newfoundland_and_labrador2016){
                    ?>
                    <tr>
                        <td><?php echo $newfoundland_and_labrador2016 -> id ?></td>
                        <td><?php echo $newfoundland_and_labrador2016 -> city ?></td>
                        <td><?php echo $newfoundland_and_labrador2016 -> homicide ?></td>
                        <td><?php echo $newfoundland_and_labrador2016 -> first_degree_murder ?></td>
                        <td><?php echo $newfoundland_and_labrador2016 -> second_degree_murder ?></td>
                        <td><?php echo $newfoundland_and_labrador2016 -> manslaughter ?></td>
                        <td><?php echo $newfoundland_and_labrador2016 -> infanticide ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-default">
                <div class="panel-heading">New Brunswick 2016</div>
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>City</td>
                        <td>Homicides</td>
                        <td>First Degree Murder</td>
                        <td>Second Degree Murder</td>
                        <td>Manslaughter</td>
                        <td>Infanticide</td>
                    </tr>
                    <?php
                    foreach($new_brunswick2016s as $new_brunswick2016){
                    ?>
                    <tr>
                        <td><?php echo $new_brunswick2016 -> id ?></td>
                        <td><?php echo $new_brunswick2016 -> city ?></td>
                        <td><?php echo $new_brunswick2016 -> homicide ?></td>
                        <td><?php echo $new_brunswick2016 -> first_degree_murder ?></td>
                        <td><?php echo $new_brunswick2016 -> second_degree_murder ?></td>
                        <td><?php echo $new_brunswick2016 -> manslaughter ?></td>
                        <td><?php echo $new_brunswick2016 -> infanticide ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-default">
                <div class="panel-heading">Northwest Territories 2016</div>
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>City</td>
                        <td>Homicides</td>
                        <td>First Degree Murder</td>
                        <td>Second Degree Murder</td>
                        <td>Manslaughter</td>
                        <td>Infanticide</td>
                    </tr>
                    <?php
                    foreach($northwest_territories2016s as $northwest_territories2016){
                    ?>
                    <tr>
                        <td><?php echo $northwest_territories2016 -> id ?></td>
                        <td><?php echo $northwest_territories2016 -> city ?></td>
                        <td><?php echo $northwest_territories2016 -> homicide ?></td>
                        <td><?php echo $northwest_territories2016 -> first_degree_murder ?></td>
                        <td><?php echo $northwest_territories2016 -> second_degree_murder ?></td>
                        <td><?php echo $northwest_territories2016 -> manslaughter ?></td>
                        <td><?php echo $northwest_territories2016 -> infanticide ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-default">
                <div class="panel-heading">Nova Scotia 2016</div>
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>City</td>
                        <td>Homicides</td>
                        <td>First Degree Murder</td>
                        <td>Second Degree Murder</td>
                        <td>Manslaughter</td>
                        <td>Infanticide</td>
                    </tr>
                    <?php
                    foreach($nova_scotia2016s as $nova_scotia2016){
                    ?>
                    <tr>
                        <td><?php echo $nova_scotia2016 -> id ?></td>
                        <td><?php echo $nova_scotia2016 -> city ?></td>
                        <td><?php echo $nova_scotia2016 -> homicide ?></td>
                        <td><?php echo $nova_scotia2016 -> first_degree_murder ?></td>
                        <td><?php echo $nova_scotia2016 -> second_degree_murder ?></td>
                        <td><?php echo $nova_scotia2016 -> manslaughter ?></td>
                        <td><?php echo $nova_scotia2016 -> infanticide ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-default">
                <div class="panel-heading">Nunavut 2016</div>
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>City</td>
                        <td>Homicides</td>
                        <td>First Degree Murder</td>
                        <td>Second Degree Murder</td>
                        <td>Manslaughter</td>
                        <td>Infanticide</td>
                    </tr>
                    <?php
                    foreach($nunavut2016s as $nunavut2016){
                    ?>
                    <tr>
                        <td><?php echo $nunavut2016 -> id ?></td>
                        <td><?php echo $nunavut2016 -> city ?></td>
                        <td><?php echo $nunavut2016 -> homicide ?></td>
                        <td><?php echo $nunavut2016 -> first_degree_murder ?></td>
                        <td><?php echo $nunavut2016 -> second_degree_murder ?></td>
                        <td><?php echo $nunavut2016 -> manslaughter ?></td>
                        <td><?php echo $nunavut2016 -> infanticide ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-default">
                <div class="panel-heading">Ontario 2016</div>
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>City</td>
                        <td>Homicides</td>
                        <td>First Degree Murder</td>
                        <td>Second Degree Murder</td>
                        <td>Manslaughter</td>
                        <td>Infanticide</td>
                    </tr>
                    <?php
                    foreach($ontario2016s as $ontario2016){
                    ?>
                    <tr>
                        <td><?php echo $ontario2016 -> id ?></td>
                        <td><?php echo $ontario2016 -> city ?></td>
                        <td><?php echo $ontario2016 -> homicide ?></td>
                        <td><?php echo $ontario2016 -> first_degree_murder ?></td>
                        <td><?php echo $ontario2016 -> second_degree_murder ?></td>
                        <td><?php echo $ontario2016 -> manslaughter ?></td>
                        <td><?php echo $ontario2016 -> infanticide ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-default">
                <div class="panel-heading">Prince Edward Island 2016</div>
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>City</td>
                        <td>Homicides</td>
                        <td>First Degree Murder</td>
                        <td>Second Degree Murder</td>
                        <td>Manslaughter</td>
                        <td>Infanticide</td>
                    </tr>
                    <?php
                    foreach($prince_edward_island2016s as $prince_edward_island2016){
                    ?>
                    <tr>
                        <td><?php echo $prince_edward_island2016 -> id ?></td>
                        <td><?php echo $prince_edward_island2016 -> city ?></td>
                        <td><?php echo $prince_edward_island2016 -> homicide ?></td>
                        <td><?php echo $prince_edward_island2016 -> first_degree_murder ?></td>
                        <td><?php echo $prince_edward_island2016 -> second_degree_murder ?></td>
                        <td><?php echo $prince_edward_island2016 -> manslaughter ?></td>
                        <td><?php echo $prince_edward_island2016 -> infanticide ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-default">
                <div class="panel-heading">Quebec 2016</div>
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>City</td>
                        <td>Homicides</td>
                        <td>First Degree Murder</td>
                        <td>Second Degree Murder</td>
                        <td>Manslaughter</td>
                        <td>Infanticide</td>
                    </tr>
                    <?php
                    foreach($Quebec2016s as $Quebec2016){
                    ?>
                    <tr>
                        <td><?php echo $Quebec2016 -> id ?></td>
                        <td><?php echo $Quebec2016 -> city ?></td>
                        <td><?php echo $Quebec2016 -> homicide ?></td>
                        <td><?php echo $Quebec2016 -> first_degree_murder ?></td>
                        <td><?php echo $Quebec2016 -> second_degree_murder ?></td>
                        <td><?php echo $Quebec2016 -> manslaughter ?></td>
                        <td><?php echo $Quebec2016 -> infanticide ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-default">
                <div class="panel-heading">Saskatchewan 2016</div>
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>City</td>
                        <td>Homicides</td>
                        <td>First Degree Murder</td>
                        <td>Second Degree Murder</td>
                        <td>Manslaughter</td>
                        <td>Infanticide</td>
                    </tr>
                    <?php
                    foreach($saskatchewan2016s as $saskatchewan2016){
                    ?>
                    <tr>
                        <td><?php echo $saskatchewan2016 -> id ?></td>
                        <td><?php echo $saskatchewan2016 -> city ?></td>
                        <td><?php echo $saskatchewan2016 -> homicide ?></td>
                        <td><?php echo $saskatchewan2016 -> first_degree_murder ?></td>
                        <td><?php echo $saskatchewan2016 -> second_degree_murder ?></td>
                        <td><?php echo $saskatchewan2016 -> manslaughter ?></td>
                        <td><?php echo $saskatchewan2016 -> infanticide ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-default">
                <div class="panel-heading">Yukon 2016</div>
                <table class="table">
                    <tr>
                        <td>ID</td>
                        <td>City</td>
                        <td>Homicides</td>
                        <td>First Degree Murder</td>
                        <td>Second Degree Murder</td>
                        <td>Manslaughter</td>
                        <td>Infanticide</td>
                    </tr>
                    <?php
                    foreach($yukon2016s as $yukon2016){
                    ?>
                    <tr>
                        <td><?php echo $yukon2016 -> id ?></td>
                        <td><?php echo $yukon2016 -> city ?></td>
                        <td><?php echo $yukon2016 -> homicide ?></td>
                        <td><?php echo $yukon2016 -> first_degree_murder ?></td>
                        <td><?php echo $yukon2016 -> second_degree_murder ?></td>
                        <td><?php echo $yukon2016 -> manslaughter ?></td>
                        <td><?php echo $yukon2016 -> infanticide ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<br/>
</body>
</html>