<?php error_reporting(0);  
$title = 'rate';
include'template\header.php';?>
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
      <h1>rate</h1>
				<ol class="breadcrumb header-bradcrumb justify-content-center">

				</ol>
			</div>
		</div>
	</div>
</section>
<!--------------------------------------------------------------------------------------->
<br>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/rate.css">
</head>
<body>
<div  class="imgcontainer ">
<h2>EQUIVALENCE OF DEGREES</h2>
<br>
<table id="customers">
<form id="format" name="form1" method="post" secion="">
  <tr>
    <th>Degree</th>
    <th>highschool </th>
    <th>Percentage </th>
    
    
  </tr>
  <tr>
    <td>highpress</td>
    <td><input type="text" name="highschool" placeholder="high school" required></td>
    <td><input type="text" name="highpress" placeholder="highpress %" required></td>
   
    
  </tr>
  <tr>
    <td>tahsilipress</td>
    <td><input type="text" name="tahsili" placeholder= "tahsili" required></td>
    <td><input type="text" name="tahsilipress" placeholder="tahsilipress %" required></td>
    
    
  </tr>
  <tr>
    <td>qudrat</td>
       <td><input type="text" name="qudrat" placeholder="qudrat" required></td>
    <td><input type="text" name="qudratpress" placeholder="qudratpress%" required></td>
 
    
  </tr>
</table>
<br>
<button type="submit"  name="submit" id="button" value ="submit" >Calculate</button>
</div>
</form>

<!---------------------------------------php-------------------------------------------------->
<?php

if (isset($_POST['submit']))
$highschool   = $_POST['highschool'];
$tahsili      = $_POST['tahsili'];
$qudrat       = $_POST['qudrat'];
$highpress    = $_POST['highpress'];
$tahsilipress = $_POST['tahsilipress'];
$qudratpress  = $_POST['qudratpress'];

$tot= $highschool*$highpress+$tahsili*$tahsilipress+$qudrat*$qudratpress;

$avg = $tot/100;
echo "<br>";
echo "<h2> Total Rate" . $avg . "</h2>"."</br>";
if($avg >= 90)
{
echo 
"<table>  
<tr>  
    <th>Majors</th>  
    <th>Universities</th>  
</tr>  
<tr>  
    <td>Fculty of Medicine</td>    
    <td> <ul>
        <li>King Saud bin Abdulaziz University</li>
        <li>King Abdulaziz University</li>
        <li>Qassim University</li>
        <li>Taibah University</li>
        <li>Taif University</li>
        <li>Al-Baha University</li>
        <li>Umm Al-Qura University</li>
        <li>Imam Mohammad bin Saud Islamic University</li>
    </ul> </td>
</tr>   
<tr>
    <td>Dentist</td>    
    <td> <ul>
        <li>King Saud bin Abdulaziz University</li>
        <li>King Abdulaziz University</li>
        <li>Princess Noura bint Abdulrahman University</li>
        <li>King Khaled University</li>
        <li>Qassim University</li>
        <li>Taibah University</li>
        <li>Taif University</li>
        <li>Al-Baha University</li>
        <li>Umm Al-Qura University</li>
        <li>Imam Mohammad bin Saud Islamic University</li>
    </ul> </td>
</tr> 
<tr>
<td>Natural Treatment</td>    
<td> <ul>
    <li>King Saud bin Abdulaziz University</li>
    <li>King Faisal University</li>
    <li>Taibah University</li>
    <li>Taif University</li>
    <li>Tabouk University</li>
</ul> </td>
</tr>   
</table>";
}

else if ($avg >= 85)  
{
    echo
    "<table>  
    <tr>  
        <th>Majors</th>  
        <th>Universities</th>  
    </tr>
    <tr>
    <td>Pharamacy</td>    
    <td> <ul>
        <li>King Saud bin Abdulaziz University</li>
        <li>King Abdulaziz University</li>
        <li>Princess Noura bint Abdulrahman University</li>
        <li>King Khaled University</li>
        <li>Prince Sattam bin Abdulaziz University</li>
        <li>King Faisal University</li>
        <li>Qassim University</li>
        <li>Shaqra University</li>
        <li>Taibah University</li>
        <li>Taif University</li>
        <li>Umm Al-Qura University</li>
        <li>Imam Mohammad bin Saud Islamic University</li>
    </ul> </td>
</tr>
<tr>
    <td>Nursing</td>    
    <td> <ul>
        <li>King Saud bin Abdulaziz University</li>
        <li>Princess Noura bint Abdulrahman University</li>
        <li>King Khaled University</li>
        <li>King Faisal University</li>
        <li>Shaqra University</li>
        <li>Taibah University</li>
        <li>Taif University</li>
    </ul> </td>
</tr>  
</table>";
}


else if ($avg > 80)
{
    echo 
    "<table>  
    <tr>  
        <th>Majors</th>  
        <th>Universities</th>  
    </tr>
    <tr> 
    <td>Engineering</td>    
    <td> <ul>
        <li>King Fahad University of Petroleum</li>
        <li>Qassim University</li>
        <li>King Faisal University</li>
        <li>Majmaah University</li>
        <li>Buraydah University</li>
        <li>Taibah University</li>
        <li>Taif University</li>
        <li>Jeddah University</li>
        <li>Imam Mohammad bin Saud Islamic University</li>
    </ul> </td>
</tr>
</table>";
}

else if ($avg > 75)
{
    echo 
    "<table>  
    <tr>  
        <th>Majors</th>  
        <th>Universities</th>  
    </tr>
    <tr> 
    <td>Computer Scince</td>    
    <td> <ul>
        <li>Shaqra University</li>
        <li>Qassim University</li>
        <li>King Faisal University</li>
        <li>Majmaah University</li>
        <li>Buraydah University</li>
        <li>Taibah University</li>
        <li>Taif University</li>
        <li>Jeddah University</li>
        <li>Imam Mohammad bin Saud Islamic University</li>
        <li>King Saud bin Abdulaziz University</li>
        <li>Princess Noura bint Abdulrahman University</li>
        <li>King Khaled University</li>
    </ul> </td>
    </tr>
    <tr>
    <td>Information Technology</td>    
    <td> <ul>
        <li>Majmaah University</li>
        <li>Onizah University</li>
        <li>Jeddah University</li>
        <li>Saudi Electronic University</li>
    </ul> </td>
    </tr>
    <tr>
    <td>Artificial Intelligence</td>    
    <td> <ul>
        <li>King Saud bin Abdulaziz University</li>
        <li>King Abdulaziz University</li>
        <li>Taif University</li>
        <li>Umm Al-Qura University</li>
        <li>Qassim University</li>
        <li>King Faisal University</li>
    </ul> </td>
</tr>  
</table>";
}
else if ($avg > 60)
{
    echo 
    "<table>  
    <tr>  
        <th>Majors</th>  
        <th>Universities</th>  
    </tr>
    <tr> 
    <td>Interior Design</td>    
    <td> <ul>
        <li>Jeddah University</li>
        <li>Princess Noura bint Abdulrahman University</li>
        <li>Taibah University</li>
        <li>King Abdulaziz University</li>
        <li>Taif University</li>
        <li>Umm Al-Qura University</li>
        <li>Prince Sattam bin Abdulaziz University</li>
    </ul> </td>
    </tr>
    <tr>
    <td>Fashion</td>    
    <td> <ul>
        <li>Jeddah University</li>
        <li>Princess Noura bint Abdulrahman University</li>
        <li>Taibah University</li>
        <li>Qassim University</li>
        <li>Taif University</li>
        <li>Umm Al-Qura University</li>
    </ul> </td>
</tr>  
</table>";
}
else if ($avg >= 0)
{
    echo "<h2>Please verify that the data entered is correct, The sum of the Rate must equal %100</h2>";
}
echo "<br>";

include'template\footer.php';?>
