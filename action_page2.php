<?php
$name=$_POST['name'];
$email=$_POST['email']
$message=$_POST['message'];
 
$conn= new mysqli('localhost','root','','test');
if($conn->connect_error){
   die('Connection Failed: '.$conn->connect_error);
}else{
   $stmt=$conn->prepare("insert into contact(name, email, message)
     value(?, ?, ?)");
   $stmt->blind_param("sss",$name, $email, $message);
   $stmt->excute();
   echo "Thanks for contacting me...";
   $stmt->close();
   $conn->close();
}
?>