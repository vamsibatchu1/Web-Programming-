<html> 
  <head> 
  <title>Checker Board Design</title>
  <link type="text/css" rel="stylesheet" href="./part2.css">
  </head>
  <body> 
  <h2>Checker Board - using Nested For-Loop</h2>
   <table>
      <?php
      for($rows=1;$rows<=8;$rows++)
	  {
          echo "<tr>";
          for($cols=1;$cols<=8;$cols++)
		  {
          $sum=$rows+$cols;
          if($sum%2==0)
		  {
          echo "<td height=35px width=35px bgcolor=#DC143C></td>"; /*Red Color boxes*/
          
          }
		  else
		  {
          echo "<td height=35px width=35px bgcolor=black></td>"; /*Black Color boxes*/
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>