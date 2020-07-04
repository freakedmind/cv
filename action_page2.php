<?php
$name=$_REQUEST['name'];
$message=$_REQUEST['message'];
$email=$_REQUEST['email']
if(empty($name)||empty($email)||empty($message))
{
    echo "Please fill all the fields";
}
else
{
    mail("vishwajeetk.gupta.civ16@iitbhu.ac.in","Contact section Message", $message,"From: $name <$email>");
    echo "<script type='text/javascript'>alert('your message sent successfully');
    window.history.log(-1);
    </script>";
}