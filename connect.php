<?php
$con=new mysqli('localhost', 'root', '', 'message_db');
if($con){
//     echo "connected successfull";
// header('location:')
}else{
    die(mysqli_error($con));
}
?>