<?php
session_start();

?>


<?php

  include 'dbcon.php';

if(isset($_POST['submit'])){
   $username=mysqli_real_escape_string($con,$_POST['username']);
   $email=mysqli_real_escape_string($con,$_POST['email']);
   $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
   $password=mysqli_real_escape_string($con,$_POST['password']);
   $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);

   $pass=password_hash( $password,PASSWORD_BCRYPT);
   $cpass=password_hash( $cpassword,PASSWORD_BCRYPT);

   $emailquery= "select * from registration where email='$email'";
   $query= mysqli_query($con,$emailquery);

   $emailcount= mysqli_num_rows($query);

   if($emailcount>0){
    ?>
    <script>
        alert("Email Already exist");
    </script>
   <?php

   }else{
     if($password === $cpassword){

    $insertquery= "insert into registration (username,email,mobile,password,cpassword) values('$username','$email','$mobile','$pass','$cpass')";

    $iquery= mysqli_query($con,$insertquery);
    if($iquery){
      ?>
 
 <script>
     alert("insert Successful");
     
 </script>

<?php
header('location:login.php');
}else{
    ?>
 
 <script>
     alert(" insert Not Successful");
 </script>

<?php
    }

  

     }else{
      ?>
 
      <script>
          alert("Password not matching");
      </script>
     
     <?php
     }
    }
  }
   
?>