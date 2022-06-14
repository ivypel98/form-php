<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql= "delete from `message` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Deleted successfully";
        // echo "Do you really want to delete it?";
        header('location:process1-form.php');
    }else{
        die(mysqli_error($con));
    }
}
?>