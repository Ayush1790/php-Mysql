<?php
include 'config.php';
if(isset($_POST)){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pswd=$_POST['pswd'];
    $cpswd=$_POST['cpswd'];
}
// adding the data in database
$stmt="INSERT into `user`(`id`,`name`,`email`,`password`) values (null,'$name','$email','$pswd')";
$result=mysqli_query($conn,$stmt);
if( $result){
    echo true;
}
else{
   echo false;
}
