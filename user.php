<?php
   session_start();    
   class user
   {
       function signup($email , $name, $mobile, $password, $confirmpassword, $connect)
       {
           if($password != $repassword)
           {
               // $error[] = array('password', 'msg' => 'Enter Same Password');
               return '<script>alert("ENTER SAME PASSWORD !")</script>';
           }
           $sql = "SELECT * FROM tbl_user";
           $result = mysqli_query($connect,$sql);

           if($result->num_rows >0)
           {
               while($row=$result->fetch_assoc())
               {
                   $_SESSION['user']=array('username'=>$row['user_name'], 'isblock'=>$row['is_block']);
                   $strtolower = strtolower($username);
                   if($_SESSION['user']['username'] == $strtolower)
                   {
                       return '<script>alert("ENTER UNIQUE USER NAME !")</script>';
                   }
               }
           }

           $insert = "INSERT INTO tbl_user(`id`, `email`, `name`, `mobile`, `email_approved`, `phone_approved`, `active`, `is_admin`, `sign_up_date`, `password`, `security_question`, `security_answer`) VALUES('$email' ,'$name', NOW(), '$mobile', 0, MD5('$password'), 0)";

           if($connect ->query($insert) === TRUE)
           {
               // echo "New Record Added Successfully";
               header("Location:login.php");
           }
           else
           {
               echo "failed";
           }  
           $connect->close();
?>