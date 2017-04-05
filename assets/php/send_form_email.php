<?php
 
// if(isset($_POST['c_name'])){
    
//     $res['sendstatus'] = 1;
//     $res['message'] = 'Form Submission Succesful';
//     echo json_encode($res);
// }

$c_name=$_POST['SendTo'];
$c_email=$_POST['EmailFrom'];
$c_message=$_POST['Message'];
 
$newEmailMessage = "NAME: " . $c_name . "\r\n" . "FROM: ". $c_email ."\r\n" ."MESSAGE: " .$c_message;
 
 
mail("czhang.rego@gmail.com", "New message received from website",$newEmailMessage);

 
?>