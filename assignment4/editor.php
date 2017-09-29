<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Editor php</title>
 <style type='text/css'>
 body
{
background-color:lavender;
text-align:center;
}
div {		
<?php
	if( isset($_POST['font_family']) )
	{
		$font_family = $_POST['font_family'];
		if ($font_family == "Arial")
   		print "font-family: Arial;\n";
   		if ($font_family == "Times New Roman")
   		print "font-family: Times New Roman;\n";
   		if ($font_family == "Georgia")
   		print "font-family: Georgia;\n";
   		if ($font_family == "Verdana")
   		print "font-family: Verdana;\n";
	}

if( isset($_POST['font_style']) ) 
{
   $font_style = $_POST['font_style'];
   if ($font_style == "bold")
   		print "font-style: bold;\n";
   	
	if ($font_style == "italic")
   		print "font-style: italic;\n";
	
}
if( isset($_POST['font_size']) )
{
	$font_size=$_POST['font_size'];
	if($font_size=="30px")
		print "font-size: 30px;\n";
	if($font_size=="50px")
		print "font-size: 50px;\n";
	if($font_size=="100px")
		print "font-size: 100px;\n";
	if($font_size=="120px")
		print "font-size: 120px;\n";
}
if( isset($_POST['font_color']) )
{
   $font_color = $_POST['font_color'];
   if ($font_color == "black")
   		print "color: black;\n";
	 if ($font_color == "olive")
   		print "color: olive;\n";
	if($font_color == "red")
	    print "color: red;\n";
	if ($font_color == "blue")
   		print "color: blue;\n";
   	if ($font_color == "green")
   		print "color: green;\n";
}

?>
    }
 </style>
</head>
<body>


<?php
		/* Print user-provided text in a div */
    print "<div>\n";
    print htmlspecialchars($_POST['text']);
    print "\n</div>\n";
?>


</body>
</html>