<?php
include('send.php');
if(isset($_POST['sbmRegister'])){
   $user =$_POST['txtUser'];
   $email =$_POST['txtEmail'];
   $pass1 =$_POST['txtPass1'];
   $pass2 =$_POST['txtPass2'];
}
$conn = mysqli_connect('localhost','root','','tlu_phonebooks');
if(!$conn){
         die("Không thể kết nối");
}
$sql="SELECT * FROM db_users WHERE user_email='$email' OR user_name='$user'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
   echo('Email đã tồn tại');
}

else{
    $pass_hash=password_hash($pass1,PASSWORD_DEFAULT);
    $sql2= "INSERT INTO db_users(user_name,user_email, user_pass) VALUES ('$user','$email','$pass_hash')";
    $result2= mysqli_query($conn,$sql2);
 
   if($result2>=1){
       sendEmail($email);
   }
}
?>