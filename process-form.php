<?php 

$name = $_POST["name"];
$message = $_POST["message"];
$priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);

if (! $terms) {
    die("terms must be accepted");
}

$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "";

 $conn = mysqli_connect(hostname: $host, 
                username: $username, 
                password: $password, 
                database: $dbname);

if (mysqli_connect_errno()) {

    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO message (name, body, priority, type)
       VALUES (?, ?, ?, ?) ";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssii",
                        $name,
                        $message,
                        $priority,
                        $type);

mysqli_stmt_execute($stmt);

echo "Record saved !";
?>

<!DOCTYPE html>
    <html>
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    </head>
    <body>
        <div class="container" style="margin-top: 50px;">
            <button style="background-color: #FBB03A; color:white"><a href="form.html" style="color:white"> Go back</a></button>
            <button style="background-color: #E37134; color:white" type="submit"><a href="process1-form.php" style="color:white">Check</a></button>
        </div> 
    </body>
    </html>


