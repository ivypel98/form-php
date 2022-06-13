<?php
    include 'connect.php'
?>


<!DOCTYPE html>
    <html>
    <head>
        <title>verification</title>
        <meta charset="UTF-8">
        <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    </head>
    <body>
        <div class="container" style="margin-top: 50px;">
            <button style="background-color: #FBB03A; color:white">
                <a href="form.html" style="color:white"> Add user
                </a>
            </button>
            <table>
                <thead>
                    <tr>
                        <th>
                            Identifiant
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Message
                        </th>
                        <th>
                            Priority
                        </th>
                        <th>
                            Type
                        </th>
                        <th>
                            Operations
                        </th>
                    </tr>
                </thead>
                <tbody>
            <?php
            $sql="Select * from `message`";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                 $id=$row['id'];
                 $name=$row['name'];
                 $body=$row['body'];
                 $priority=$row['priority'];
                 $type=$row['type'];
                 echo ' <tbody>
                 <tr>
                     <td>'.$id.'</td>
                     <td>'.$name.'</td>
                     <td>'.$body.'</td>
                     <td>'.$priority.'</td>
                     <td>'.$type.' </td>
                 </tr>
                        </tbody>';
                }
            }
            ?>

                        <td>
                            <button><a href=""></a></button>
                            <button><a href=""></a></button>
                        </td>
                        <!-- <tr>
                         <td>
                         </td>
                         <td>
                         </td>
                         <td>
                         </td>
                         <td>
                         </td>
                        </tr> -->

             
                </tbody>
            </table>
        </div> 
        
    </body>
    </html>