<html>
<body bgcolor="magenta">  
 
<h1><center>
 <?php
	$m=new MongoClient();
	$db = $m->mydb;
	$collection = $db->mycol;
	{
		$document = array(
					"USERNAME"=>"$_POST[name]",
					"MIDDLENAME"=>"$_POST[middlename]",
					"SURNAME"=>"$_POST[surname]",
					"GENDER"=>"$_POST[gender]",
					"CINDATE"=>"$_POST[cindate]",
					"COUTDATE"=>"$_POST[coutdate]", 
					"NOOFROOM"=>"$_POST[noofrooms]",
					

				);

		$collection->insert($document);
		echo "Inserted Successfully";
	}         

?>
<h1/>
<a href="admin.php"><h3>login </h3></a>
</body>
 </html>
