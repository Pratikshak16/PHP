<html>
<body bgcolor="magenta">  
 
<h1><center>
  <?php
$m=new MongoClient();
$db = $m->mydb;

$collection = $db->admin;
{
$document = array(


"FIRST NAME"=>"$_POST[name]",
"MIDDLE NAME"=>"$_POST[password]",




);
$collection->insert($document);

echo "Inserted Successfully";

 }         
?>
<h1/>
<a href="admin.php">Login </a>
</body>
 </html>
