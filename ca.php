<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


<title>ONLINE HOTEL ROOM BOOKING SYSTEM	</title>


</head>


<body bgcolor=grey align=center>
<h1><b>HOTEL ORANGE TREE</b></h1>

  



	<script type="text/javascript">
	function validate()
	{
			

		if(document.register.name.value=="")	
		{
			alert("Enter name");
			document.register.name.focus();
			return false;
		}
		if(document.register.middlename.value=="")	
		{
			alert("Enter middle name");
			document.register.middlename.focus();
			return false;
		}
	
		if(document.register.surname.value=="")	
		{
			alert("Enter surname");
			document.register.surname.focus();
			return false;
		}
	
		if((register.gender[0].checked== false) && (register.gender[1].checked== false))	
		{
			alert("Enter gender male or female");
			return false;
		}
		return true;
		}

</script>
</head>

<body>

	<center>
	<h1> Registeration Form</h1>
	<form name="register" method="post" action="reg.php" onSubmit="return(validate());">
	<center><table cellspacing="6" cellpadding="4" align=center border="0">
		
		<tr>
			<td>Name
			<td><input type="text" name="name" />
		</tr>
		<tr>
			<td>Middle Name
			<td><input type="text" name="middlename" />
		</tr>
		<tr>
			<td>Surname
			<td><input type="text" name="surname" />
		</tr>
		
		<tr>
			<td>Gender
			<td><input type="radio" name="gender" />Male<input type="radio" name="gender" />Female
		
		</td>
		</td>
                   
</tr>
<tr>
 <td>checkin date: </td><td><input type="date" name="cindate"></td>
   </tr>
<tr>
<td>
   checkout date:</td><td> <input type="date" name="coutdata"></td>
 

<tr>
 <tr>  
<td>No. of rooms:</td><td> <select name="Rooms">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</td>
 </tr>

  



		
		<tr>
			<td colspan="2" align="center"><input type="reset" value="reset" />&nbsp;&nbsp;<input type="submit" value="submit" />

		</tr>
	</form>	</table>	</center>
</body>
</html></form>


</body>
</html>