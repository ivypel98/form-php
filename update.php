 <?php
 include 'connect.php';
 $id=$_GET["updateid"];
 $sql="select * from `message` where id = $id";
 $result=mysqli_query($con,$sql);

 if( $result){
    
    $row=mysqli_fetch_assoc($result);
    $name=$row["name"];
    $message=$row["body"];
 }

if(isset($_POST["submit"])){
   $name = $_POST["name"];
$message = $_POST["message"];
$priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);

if (! $terms) {
    die("terms must be accepted");
}
    $sql="update `message` set id=$id,name='$name',body='$message',priority=$priority,type=$type where id =$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:process1-form.php');
    }
}
 
 
 
 
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
</head>
<body>

    <h1>Connexion</h1>
 
    <form method="post">

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo $name;?>">
        
        <label for="message">Message</label>
        <textarea id="message" name="message"><?php echo $message;?></textarea>

        <label for="priority">Priority</label>
        <select id="priority" name="priority">
            <option value="1">Low</option>
            <option value="2" selected>Medium</option>
            <option value="3">High</option>
        </select>

        <fieldset>
            <legend>Type</legend>

            <label>
                <input type="radio" name="type" value="1" checked>
                Complaint
            </label>

            <br>

            <label>
                <input type="radio" name="type" value="2">
                Suggestion
            </label>

        </fieldset>

        <label>
            <input type="checkbox" name="terms">
            I agree to the terms and conditions
        </label>

        <br>

        <button type="submit" style="background-color: #FBB03A; color:white" name="submit">Update</button>

    </form>

</body>
</html>