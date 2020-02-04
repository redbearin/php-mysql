<html>
<body>
<h2>The Beatles</h2>
<?php
$counter = 0;
$thebeatles = array("John", "Paul", "George", "Ringo");
while($counter < 4) {
  echo "one member of the Beatles is $thebeatles[$counter]<br>\n";
  $counter += 1;
}
?>
</body>
</html>