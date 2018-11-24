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
	<th class="tg-s268">Firstname</th>
	<th class="tg-s268">Lastname</th>
    <th class="tg-s268">Maths</th>
    <th class="tg-s268">English</th>
    <th class="tg-s268">Kiswahili</th>
    <th class="tg-0lax">Physics</th>
    <th class="tg-0lax">Biology</th>
    <th class="tg-0lax">Chemistry</th>
    <th class="tg-0lax">History </th>
    <th class="tg-0lax">C.R.E</th>
    <th class="tg-0lax">Save</th>
  </tr>


<?php 
  
  $sql="SELECT id, firstname, lastname FROM students ";
  
  $students = $db->query($sql);
  if ($students-> num_rows > 0){
	  while ($row= $students->fetch_assoc())
		{
		  echo '
			<form>
				<tr>
					<td class="tg-s268" style="display: none;">'.$row["id"].'</td>
					<td class="tg-s268">'.$row["firstname"].'</td>
					<td class="tg-s268">'.$row["lastname"].'</td>
					<td class="tg-s268"><input type="text" name="maths"></td>
					<td class="tg-s268"><input type="text" name="english"></td>
					<td class="tg-s268"><input type="text" name="kiswahili"></td>
					<td class="tg-0lax"><input type="text" name="physics"></td>
					<td class="tg-0lax"><input type="text" name="biology"></td>
					<td class="tg-0lax"><input type="text" name="chemistry"></td>
					<td class="tg-0lax"><input type="text" name="history"></td>
					<td class="tg-0lax"><input type="text" name="cre"></td>
					<td class="tg-0lax"><input type="submit" name="submit" value="Save"></td>
				</tr>
			</form>';
		}
	}
  
  
  ?>
</table>	  
</body>
</html>