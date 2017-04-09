<html>
	<head>
		<title> Form</title>
	</head>
<body bgcolor='d7f3ea'>
<h1 align='center'><font color='red'>YOUR DETAILS AS FOLLOWS:</font></h1>
<table align='center'><tr> <td> FIRST NAME: </td>  <td><?php echo($_POST["t1"]); ?></td></tr>
<tr> <td> LAST NAME: </td>  <td><?php echo($_POST["t2"]); ?></td></tr>
<tr> <td> E-Mail ADDRESS: </td>  <td><?php echo($_POST["t3"]); ?></td></tr>
<tr> <td> DATE OF BIRTH: </td>  <td><?php echo($_POST["dt"]); ?></td></tr>
<tr> <td> GENDER: </td><td><?php echo($_POST["radio"]); ?></td></tr>
<tr> <td> MOBILE NUMBER: </td>  <td><?php echo $_POST["t6"]; ?></td></tr>
<tr><td> COUNTRY:</td><td><?php echo $_POST["loc"]; ?></td></tr>
<tr><td> ADDRESS:</td> <td><?php echo $_POST["add"]; ?></td></tr>
</table>
</body>
</html>