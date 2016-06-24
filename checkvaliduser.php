<html>
<body bgcolor="magenta">  
 
<table border="5" bgcolor=magenta bordercolor=blue cellpadding=10 cellspacing =10 align=center>
<tr><th>
  <?php
$m=new MongoClient();
$db = $m->mydb;

$collection = $db->admin;
	if($_POST[name]==NULL)
	{
		if($_POST[password]==NULL)
		{
			echo"enter info";
		}
	}
	else
	{

            $cursor = $collection->find(array("USERNAME" => "$_POST[name]","PASSWORD"=>"$_POST[password]"));
				  if ($cursor->count() == 0)
				  { 
				  echo" login unsuccessful";
				  echo"<form action =admin.php><input type=submit value=Relogin></form>";
				 
				  }
				  else
				  {
				   echo"LOGIN SUCCESSFUL";
				   echo"<form action=display.html><input type=submit value=ENTER></form>";
				  }            
     }         
?>
</tr></th>
</body>
 </html>
