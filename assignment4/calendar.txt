

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en'>
<head>
<title>My Calendar</title>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<link rel='stylesheet' type='text/css' href='calendar.css'></link>
</head>
<body>
<div class="container">
<h1>My Calendar<br/><?php date_default_timezone_set("America/New_York");echo "Today: ".date("l").", ".date("Y/m/d")." Time: ".date("h:i:sa"); ?></h1><br/>
<table id="event_table">
	<tr class="table_header">
		<td id="hr_td">Time</td><td>Sai Deepika</td><td>Louis Henry</td><td>Tejaswi</td>
	</tr>
	<?php
	date_default_timezone_set("America/New_York");
	$hours_to_show=12;
	$hourCounter=0;
	$counter = 0;
	$Start1=array("Mon"=>9,"Tue"=>9,"Wed"=>9,"Thu"=>9,"Fri"=>9);
	$Lunch1=array("Mon"=>12,"Tue"=>12,"Wed"=>13,"Thu"=>12,"Fri"=>13);
	$End1=array("Mon"=>18,"Tue"=>18,"Wed"=>18,"Thu"=>18,"Fri"=>18);
	$Start2=array("Mon"=>10,"Tue"=>11,"Wed"=>10,"Thu"=>10,"Fri"=>9);
	$Lunch2=array("Mon"=>13,"Tue"=>14,"Wed"=>14,"Thu"=>14,"Fri"=>12);
	$End2=array("Mon"=>19,"Tue"=>20,"Wed"=>19,"Thu"=>19,"Fri"=>18);
	$Start3=array("Wed"=>11,"Thu"=>9,"Fri"=>9,"Sat"=>9,"Sun"=>11);
	$Lunch3=array("Wed"=>13,"Thu"=>13,"Fri"=>12,"Sat"=>14,"Sun"=>15);
	$End3=array("Wed"=>20,"Thu"=>18,"Fri"=>18,"Sat"=>17,"Sun"=>19);
	$startHour=date("G");
	$switch=true; 
	$currentDay=date("D", strtotime('+'.$counter.' days'));

	
	function get_hour_string($timestamp){
		$time="";
		if($timestamp>=12&&$timestamp<=23){
			$time.=$timestamp-12;
			$time.=" p.m.";
		}else if($timestamp==0){
			$time.=12;
			$time.=" a.m.";
		}else{
		$time.=$timestamp;
		$time.=" a.m.";
		}
		return $time;
	}

	function makeScheduled($start, $end, $lunch, $time, $day){
	 if(array_key_exists($day, $start)&&$time<=$end[$day]){
		if($time==$lunch[$day]){
		 return " class='lunch'> Lunch Time";
		}else{
		  return " class='work'> Work Time";
		}
	 }
		return ">Off";
	}
	
	for($count=1;$count<=$hours_to_show;$count++){
		 if($switch){
			echo "<tr class='even_row'>";
			echo "<td class='hr_td'>".get_hour_string(date("G", strtotime('+'.$hourCounter.' hours')))."</td>";
		$schedule=makeScheduled($Start1,$End1,$Lunch1,$startHour, $currentDay);
		echo "<td class='hr_td'".$schedule."</td>";
		$schedule=makeScheduled($Start2,$End2,$Lunch2,$startHour, $currentDay);
		echo "<td class='hr_td'".$schedule."</td>";
		$schedule=makeScheduled($Start3,$End3,$Lunch3,$startHour, $currentDay);
		echo "<td class='hr_td'".$schedule."</td>";
		echo "</tr>";
		
		}else{
			echo "<tr class='odd_row'>";
			echo "<td class='hr_td'>".get_hour_string(date("G", strtotime('+'.$hourCounter.' hours')))."</td>";
		$schedule=makeScheduled($Start1,$End1,$Lunch1,$startHour, $currentDay);
		echo "<td class='hr_td'".$schedule."</td>";
		$schedule=makeScheduled($Start2,$End2,$Lunch2,$startHour, $currentDay);
		echo "<td class='hr_td'".$schedule."</td>";
		$schedule=makeScheduled($Start3,$End3,$Lunch3,$startHour, $currentDay);
		echo "<td class='hr_td'".$schedule."</td>";
		echo "</tr>";
		
		}
		
		
		$startHour++;
		$hourCounter++;
		
		$switch=!$switch;
	}
?>
</table>	

</div>	
<p>
    <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fcodd.cs.gsu.edu%2F~sgopala1%2Fcalendar.css&profile=css3&usermedium=all&warning=1&vextwarning=&lang=en">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</p>
</body>
</html>