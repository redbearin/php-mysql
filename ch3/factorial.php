<html>
<body>
<?php
$randomNumber = rand(1, 50);
$factorial = 1;
for ($number=1; $number <= $randomNumber; $number++) {
  $factorial *= $number;
}
echo "The factorial of $randomNumber is $factorial."
?>
</body>
</html>