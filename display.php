<html>
<body bgcolor=magenta>
<a href="index.php">HOME</a>

<?php
$m=new MongoClient();
$db = $m->mydb;
echo "Database mydb selected";
$collection = $db->mycol;
echo "Collection selected succsessfully";
$cursor = $collection->find();

/*// iterate cursor to display title of documents
foreach ($cursor as $document) {
echo First Name:$document["FIRST NAME"] . "\n";
echo Last name:$document["LAST NAME"] . "\n";
echo Address:$document["ADDRESS"] . "\n";
echo Email:$document["EMAIL"] . "\n";
echo Comments:$document["C0MMENTS"] . "\n";
echo mob no:$document["MOB NO"] . "\n";
}
*/
echo "<table border='1' bgcolor=white>
<tr>
<th>NAME</th>
<th>MIDDLE NAME</th>
<th>LAST NAME</th>
<th>GENDER</th>
<th>CHEK IN DATE</th>
<th>CHECK OUT DATE</th>
<th>NO. OF ROOMS</th>


</tr>";
foreach ($cursor as $document)
{
echo "<tr><td>" . $document["name"]. "</td>";
echo "<td>" . $document["middlename"]. "</td>";
echo "<td>" . $document["surname"]. "</td>";
echo "<td>" . $document["gender"]. "</td>";
echo "<td>" . $document["cindate"] . "</td>";
echo "<td>" .$document["coutdate"] . "</td>";
}
echo "</table>";

?>
<hr/>
<a href="surveydelete.html"><b>Delete Record</b></a><br><br><br><br>
<a href="surveyupdate.html"><b>Update record</b></a><br><br><br><br>
<a href="index.php"><b>Logout</b></a><br><br><br><br>
</body>
</html>
