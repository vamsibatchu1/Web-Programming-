<html>
<head>
<title>Restaurant</title>
<link type="text/css" rel="stylesheet" href="./restaurant.css">
</head>
<body>
<?php
/*Array to hold the List of Restaourants and the Average Costs*/
$rest_list = array("Chama Gaucha"=>"$40.50","Aviva by Kameel"=>" $15.00","Bone’s Restaurant"=>"$65.00","Umi Sushi Buckhead"=>"$40.50","Fandangles"=>"$30.00","Capital Grille"=>"$60.50","Canoe"=>"$35.50","One Flew South"=>"$21.00","Fox Bros. BBQ"=>"$15.00","South City Kitchen Midtown"=>"$29.00");

/*Part 1 of the Program*/
echo "<h2>10 Best Restaurants</h2>";
echo "<table><tr><th>Name</th><th>Avg Cost</th></tr>";
foreach($rest_list as $i => $i_value){
echo "<tr><td>".$i."</td><td>".$i_value."</td></tr>";
}
echo "</table>";
    
    
/*Part 2 of the Program*/
echo "<h2> Restaurants ordered by price</h2>";
    
function sorted_Price() /*Function to perform Sorting on Price*/
{
$rest_list = array("Chama Gaucha"=>"$40.50","Aviva by Kameel"=>" $15.00","Bone’s Restaurant"=>"$65.00","Umi Sushi Buckhead"=>"$40.50","Fandangles"=>"$30.00","Capital Grille"=>"$60.50","Canoe"=>"$35.50","One Flew South"=>"$21.00","Fox Bros. BBQ"=>"$15.00","South City Kitchen Midtown"=>"$29.00");
asort($rest_list);
echo "<table><tr><th>Name</th><th>Avg Cost</th></tr>";
foreach($rest_list as $i => $i_value){
echo "<tr><td>".$i."</td><td>".$i_value."</td></tr>";
}
echo "</table>";
}
sorted_Price();
    
/*Part 3 of the Program*/
echo "<h2> Restaurants ordered by Name</h2>";
function sorted_Name()/*Function to perform Sorting on Name*/
{
$rest_list = array("Chama Gaucha"=>"$40.50","Aviva by Kameel"=>" $15.00","Bone’s Restaurant"=>"$65.00","Umi Sushi Buckhead"=>"$40.50","Fandangles"=>"$30.00","Capital Grille"=>"$60.50","Canoe"=>"$35.50","One Flew South"=>"$21.00","Fox Bros. BBQ"=>"$15.00","South City Kitchen Midtown"=>"$29.00");
ksort($rest_list);
echo "<table><tr><th>Name</th><th>Avg Cost</th></tr>";
foreach($rest_list as $i => $i_value){
echo "<tr><td>".$i."</td><td>".$i_value."</td></tr>";
}
echo "</table>";
}

sorted_Name();
?>
</body>
</html>