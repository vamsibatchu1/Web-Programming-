<html>
<head>
<title>Months and Sorted Listings</title>
</head>
<body>
<?php
$month = array('January','February','March','April','May','June','July','August','September','October','November','December');
$len = count($month);

/*Section 1 : Months Using for loop*/
echo "<h3><font color=grey>1.Months - for loop</font></h3>";
for ($i=0; $i < $len; $i++){
echo $month[$i];
echo "<br>";
}

   
/*Section 2 : Sorted Months Using for Loop*/
echo "<hr>";
echo "<h3><font color=grey>2. Sorted Months - for loop</font></h3>";
months_Sort();


/*Section 3 : Months Using For Each Loop*/
echo "<hr>";
echo "<h3><font color=grey>3. Months using foreach loop</font></h3>";
foreach($month as $item)
{
echo $item;
echo "<br>";
}

/*Section 4 : Sorted Months Using For Each Loop*/
echo "<hr>";
echo "<h3><font color=grey>4. Months in Sorted Order using foreach loop</font></h3>";
months_Sort_forEach();
    
/*Functions*/
function months_Sort(){
$month = array('January','February','March','April','May','June','July','August','September','October','November','December');
$len = count($month);
sort($month);
for ($i=0; $i < $len; $i++){
echo $month[$i];
echo "<br>";
}
}
function months_Sort_forEach(){
$month = array('January','February','March','April','May','June','July','August','September','October','November','December');
sort($month);
foreach($month as $item)
{
echo $item;
echo "<br>";
}
}

?>
</body>
</html>

