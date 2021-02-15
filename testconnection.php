<?php
$link = mysqli_connect('localhost', 'joemarca_jmec', 'dd+V}ZK.yW$1');
if (!$link) {
die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>