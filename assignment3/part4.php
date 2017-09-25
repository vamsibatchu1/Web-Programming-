<html>
<head>
<title>Restaurant</title>
<link type="text/css" rel="stylesheet" href="./restaurant.css">
</head>
<body>
<?php
$restaurant = array("Chama Gaucha"=>"$40.50","Aviva by Kameel"=>" $15.00","Bone’s Restaurant"=>"$65.00","Umi Sushi Buckhead"=>"$40.50","Fandangles"=>"$30.00","Capital Grille"=>"$60.50","Canoe"=>"$35.50","One Flew South"=>"$21.00","Fox Bros. BBQ"=>"$15.00","South City Kitchen Midtown"=>"$29.00");
echo "<h2> Restaurants</h2>";
echo "<table><tr><th>Name</th><th>Average Cost</th></tr>";
foreach($restaurant as $x => $x_value){
echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";
}
echo "</table>";
echo "<h2> Restaurants ordered by price</h2>";
function sort_by_Price(){
$restaurant = array("Chama Gaucha"=>"$40.50","Aviva by Kameel"=>" $15.00","Bone’s Restaurant"=>"$65.00","Umi Sushi Buckhead"=>"$40.50","Fandangles"=>"$30.00","Capital Grille"=>"$60.50","Canoe"=>"$35.50","One Flew South"=>"$21.00","Fox Bros. BBQ"=>"$15.00","South City Kitchen Midtown"=>"$29.00");
asort($restaurant);
echo "<table><tr><th>Name</th><th>Average Cost</th></tr>";
foreach($restaurant as $x => $x_value){
echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";
}
echo "</table>";
}
sort_by_Price();
echo "<h2> Restaurants ordered by name</h2>";
function sort_by_Name(){
$restaurant = array("Chama Gaucha"=>"$40.50","Aviva by Kameel"=>" $15.00","Bone’s Restaurant"=>"$65.00","Umi Sushi Buckhead"=>"$40.50","Fandangles"=>"$30.00","Capital Grille"=>"$60.50","Canoe"=>"$35.50","One Flew South"=>"$21.00","Fox Bros. BBQ"=>"$15.00","South City Kitchen Midtown"=>"$29.00");
ksort($restaurant);
echo "<table><tr><th>Name</th><th>Average Cost</th></tr>";
foreach($restaurant as $x => $x_value){
echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";
}
echo "</table>";
}

sort_by_Name();
?>
</body>
</html>