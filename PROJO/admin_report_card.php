<?php 

include 'server.php';


if (isset($_POST['submit'])){
	
    $maths =  mysqli_real_escape_string($_POST['maths']);
	$english =  mysqli_real_escape_string($_POST['english']);
	$kiswahili =  mysqli_real_escape_string($_POST['kiswahili']);
	$physics =  mysqli_real_escape_string($_POST['physics']);
	$biology =  mysqli_real_escape_string($_POST['biology']);
	$chemistry =  mysqli_real_escape_string($_POST['chemistry']);
	$history =  mysqli_real_escape_string($_POST['history']);
	$cre =  mysqli_real_escape_string($_POST['cre']);
	
	$marks_submit= "INSERT INTO subjects (maths	, english, kiswahili, physics, biology, chemistry, history, cre	) 
					  VALUES('$maths', '$english', '$kiswahili', '$physics', '$biology', '$chemistry', '$history', '$cre')";
					  if($db->query($marks_submit) ===TRUE ){
						  header("Location: admin_report_card.php");
						  exit();
					  }
					  else{
						  print "Failed:".$db->error;
					  }
}

?>
	


<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#bbb;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#bbb;color:#594F4F;background-color:#E0FFEB;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#bbb;color:#493F3F;background-color:#9DE0AD;}
.tg .tg-s268{text-align:left}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>

<body>
<form method ="POST" action = "admin_report_card.php">
<table class="tg">
  <tr>
    <th class="tg-s268">Name</th>
    <th class="tg-s268">Maths</th>
    <th class="tg-s268">English</th>
    <th class="tg-s268">Kiswahili</th>
    <th class="tg-0lax">Physics</th>
    <th class="tg-0lax">Biology</th>
    <th class="tg-0lax">Chemistry</th>
    <th class="tg-0lax">History </th>
    <th class="tg-0lax">C.R.E</th>
  </tr>
  
  <?php 
  
  $username='$username';
  $sql="SELECT username FROM users ";
  $calvin=$db->query($sql);
  
  
  while ($row=$calvin->fetch_assoc())
  {
	  
  }
  ?>
  
  <tr>
    <td <?php print $row['username'];?>></td>
    <td class="tg-s268"><input type="text" name="maths"></td>
    <td class="tg-s268"><input type="text" name="english"></td>
    <td class="tg-s268"><input type="text" name="kiswahili"></td>
    <td class="tg-0lax"><input type="text" name="physics"></td>
    <td class="tg-0lax"><input type="text" name="biology"></td>
    <td class="tg-0lax"><input type="text" name="chemistry"></td>
    <td class="tg-0lax"><input type="text" name="history"></td>
    <td class="tg-0lax"><input type="text" name="cre"></td>
  </tr>
  <tr>
    <td <?php print $row['username'];?>></td>
    <td class="tg-s268"><input type="text" name="maths"></td>
    <td class="tg-s268"><input type="text" name="english"></td>
    <td class="tg-s268"><input type="text" name="kiswahili"></td>
    <td class="tg-0lax"><input type="text" name="physics"></td>
    <td class="tg-0lax"><input type="text" name="biology"></td>
    <td class="tg-0lax"><input type="text" name="chemistry"></td>
    <td class="tg-0lax"><input type="text" name="history"></td>
    <td class="tg-0lax"><input type="text" name="cre"></td>
  </tr>
  <tr>
    <td <?php print $row['username'];?>></td>
    <td class="tg-s268"><input type="text" name="maths"></td>
    <td class="tg-s268"><input type="text" name="english"></td>
    <td class="tg-s268"><input type="text" name="kiswahili"></td>
    <td class="tg-0lax"><input type="text" name="physics"></td>
    <td class="tg-0lax"><input type="text" name="biology"></td>
    <td class="tg-0lax"><input type="text" name="chemistry"></td>
    <td class="tg-0lax"><input type="text" name="history"></td>
    <td class="tg-0lax"><input type="text" name="cre"></td>
  </tr>
  <tr>
   <td <?php print $row['username'];?>></td>
    <td class="tg-s268"><input type="text" name="maths"></td>
    <td class="tg-s268"><input type="text" name="english"></td>
    <td class="tg-s268"><input type="text" name="kiswahili"></td>
    <td class="tg-0lax"><input type="text" name="physics"></td>
    <td class="tg-0lax"><input type="text" name="biology"></td>
    <td class="tg-0lax"><input type="text" name="chemistry"></td>
    <td class="tg-0lax"><input type="text" name="history"></td>
    <td class="tg-0lax"><input type="text" name="cre"></td>
	</tr>
	 <tr>
    <td <?php print $row['username'];?>></td>
    <td class="tg-s268"><input type="text" name="maths"></td>
    <td class="tg-s268"><input type="text" name="english"></td>
    <td class="tg-s268"><input type="text" name="kiswahili"></td>
    <td class="tg-0lax"><input type="text" name="physics"></td>
    <td class="tg-0lax"><input type="text" name="biology"></td>
    <td class="tg-0lax"><input type="text" name="chemistry"></td>
    <td class="tg-0lax"><input type="text" name="history"></td>
    <td class="tg-0lax"><input type="text" name="cre"></td>
  </tr>
   <tr>
    <td <?php print $row['username'];?>></td>
    <td class="tg-s268"><input type="text" name="maths"></td>
    <td class="tg-s268"><input type="text" name="english"></td>
    <td class="tg-s268"><input type="text" name="kiswahili"></td>
    <td class="tg-0lax"><input type="text" name="physics"></td>
    <td class="tg-0lax"><input type="text" name="biology"></td>
    <td class="tg-0lax"><input type="text" name="chemistry"></td>
    <td class="tg-0lax"><input type="text" name="history"></td>
    <td class="tg-0lax"><input type="text" name="cre"></td>
	
	 </br>
	 </br>
	<input type="submit" name="submit" value="Submit">
  </tr>
</form>
</body>