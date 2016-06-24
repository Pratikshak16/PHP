<html>
<body bgcolor="grey">
<a href="mainpage.php">HOME</a>

<?php
$m=new MongoClient();
$db = $m->mydb;
echo "Database mydb selected";
$collection = $db->mycol;
echo "Collection selected succsessfully";

// now remove the document
$collection->remove(array("FIRST NAME"=>"$_POST[delete1]"));
echo "Documents deleted successfully";

$cursor = $collection->find();
/*// iterate cursor to display title of documents
foreach ($cursor as $document) {
echo First name:$document["FIRST NAME"] . "\n";
echo Last name:$document["LAST NAME"] . "\n";
echo Check-in date:$document["CHECK-IN DATE"] . "\n";
echo Check-out date:$document["CHECK-OUT DATE"] . "\n";
echo no.of rooms:$document["NO.OF ROOMS"] . "\n";
}
*/
echo "<table border='1' bgcolor=white>
<tr>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>CHECKIN DATE</th>
<th>CHECK-OUT DATE</th>
<th>NO.OF ROOMS</th>
<th>Gender</th>

</tr>";
foreach ($cursor as $document)
{
echo "<td>" . $document["FIRST NAME"]. "</td>";
echo "<td>" . $document["LAST NAME"]. "</td>";
echo "<td>" . $document["CHECK-IN DATE"] . "</td>";
echo "<td>" .$document["CHECK-OUT DATE"] . "</td>";
echo "<td>" . $document["NO.OF ROOMS"] . "</td>";
echo "<td>" . $document["GENDER"]. "</td>";

}
echo "</table>";

?>
<hr/>
<a href="fbd.php"><b>Delete record</b></a>
</body>
</html>
