<html>
<body bgcolor="#00FF00">
<a href="signup.php">HOME</a><br>
<a href="display.php">View</a><br>

<?php
// connect to mongodb
$m = new MongoClient();
echo "Connection to database successfully";
// select a database
$db = $m->mydb;
echo "Database mydb selected";
$collection = $db->mycol;
echo "Collection selected succsessfully";
// now update the document
$collection->update(array("FIRST NAME"=>"$_POST[name]"), array('$set'=>array("FIRST NAME"=>"$_POST[setto]")));
echo "Document updated successfully";
// now display the updated document
$cursor = $collection->find();
// iterate cursor to display title of documents
echo "Updated document";
foreach ($cursor as $document) {
echo $document["NAME TO UPDATE"] . "\n";
}
?>

</body>
</html>