<?php
   $Name=$POST['Name'];
   $Email=$POST['Email'];

   //database connection
   $conn=new mysqli('localhost','root','','test');
   if($conn->connect_error)
   {
    die('Connection Failed    :' .$conn->connect_error);
   }else
   {
    $stmt=$conn->prepare("insert into registration(Name,Email) values(?,?)");
    $stmt->bind_param("ss",$Name,$Email);
    $stmt->execute();
    echo "logged in successfully...";
    $stmt->close();
    $stmt->close();
   }
?>