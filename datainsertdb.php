<html>
<body bgcolor="magenta">  
 
<h1><center>
  <?php
$m=new MongoClient();
$db = $m->mydb;

$collection = $db->mycol;
{
$document = array(


"FIRST NAME"=>"$_POST[name]",
"MIDDLE NAME"=>"$_POST[middlename]",
"LAST NAME"=>"$_POST[surname]",
"GENDER"=>"$_POST[gender]",
"CHECK-IN DATE"=>"$_POST[cindate]",
"CHECK-OUT DATE"=>"$_POST[coutdate]",

"NO.of rooms"=>"$_POST[NO. of rooms]",

);
$collection->insert($document);

echo "Inserted Successfully";

 }         
?>
<h1/>
<a href="display.php">display </a>
</body>
 </html>
