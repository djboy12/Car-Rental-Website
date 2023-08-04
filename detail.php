<?php
require('connection.php');

if (isset($_POST['submit'])) {
$query="INSERT INTO `detail`(`location`, `pdate`, `rdate`) VALUES ('$_POST[location]','$_POST[pdate]','$_POST[rdate]')";

}
?>
