<?php session_start();
include("dbcon.php");
?>

<html>
<head>

<link href="Style.css" style="text/css" rel="stylesheet">
<style>
table{
	border-collapse: collapse;
	width:50%;
}
th,td{
	text-align:left;
	padding:5px;
}

tr:nth-child(even){ background-color:#f2f2f2;}
</style>


</head>

<body>

	<br><br>
<center>

	<div class="head"><font size="5">Sources of Income</font></div>
<br><br>
<table border="2">
	<td><center>Type</center></td>
	<td><center>Account Code</center></td>
	<td><center>Update</center></td>
	<td><center>Delete</center></td>

<?php
		
include('dbcon.php');


$res = mysqli_query($con, "SELECT * FROM `finance_fundoperation_income`");
while($row = mysqli_fetch_array($res)){
	$id = $row["income_id"];
echo "<tr><td>".$row["income_type"]."</td><td>".$row["income_code"]."</td>
<td><center><a href='IncomeFundOperationUpdate.php?id=$id'><button  class='btn btn-success'> UPDATE </button></a>&nbsp;&nbsp;&nbsp;&nbsp;</td></center>
<td><center><a href='IncomeFundOperationDelete.php?id=$id'><button  class='btn btn-success'> DELETE </button></a></td></tr></center>";
}

?>
</tr>

</table>

</body>
</html>	