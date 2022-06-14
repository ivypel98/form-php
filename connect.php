<?php
$con=new mysqli('localhost', 'root', '', 'message_db');
if(!$con){
 die(mysqli_error($con));
}
?>