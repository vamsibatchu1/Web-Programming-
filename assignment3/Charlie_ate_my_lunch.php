<html>
<head>
<title>Charlie's Eating Probability</title>
</head>
<body>
<?php
/*This function is coded to generate a webpage for displaying accordingly*/
function isBitten(){
/*Random function for probability*/
srand((double)microtime()*1000000);
$eat=rand(0,1);
if($eat == 1)
{

echo "<h2><font color=grey>Charlie ate my lunch!</font></h2>"; /*Charlie ate my lunch code*/
}
else if($eat == 0)
{
echo "<h2><font color=blue>Charlie did not eat my lunch!</font></h2>"; /*Charlie's probability of not eating case*/
}
}

isBitten();
?>

</body>
</html>

