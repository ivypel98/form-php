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
          <style>
            .d-flex{display:flex;}
          </style>
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
                 echo ' 
                 <tr>
                     <td>'.$id.'</td>
                     <td>'.$name.'</td>
                     <td>'.$body.'</td>
                     <td>'.$priority.'</td>
                     <td>'.$type.' </td>
                     <td class="d-flex">
                     <button><a href="update.php? updateid='.$id.'">Update</a></button>
                     <button><a href="delete.php? deleteid='.$id.'">Delete</a></button>
                     </td>
                 </tr>'
                    ;
                }
            }
            ?>
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