<?php

session_start(); 


?>




<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
  
    $email= $_POST['newemail'];
    $password= $_POST['newpassword'];

    $email_search= "select * from registration where email='$email'";
    $query=mysqli_query($con,$email_search);

    $email_count=mysqli_num_rows($query);

    if($email_count){
        $email_pass= mysqli_fetch_assoc($query);

       $db_pass= $email_pass['password'];
       $pass_decode= password_verify($password,$db_pass);

       if($pass_decode){
         echo "log in successfull";
       
       }else{
        echo "password incorrect";
       }
      

       
    }

}



?> 