<?php
   
     if(isset($_POST['submit']))
       {
           $name = $_POST['name'];
           $email = $_POST['email'];
           $uname = $_POST['uname'];
           $pword = $_POST['pword'];
           $conpword = $_POST['conpword'];
           $gender = $_POST['gender'];
           $date = $_POST['date'];
           $month = $_POST['month'];
           $year = $_POST['year'];
           
           if(empty($name))
           {
               echo "Name is empty ";
           
           }
           if(empty($uname))
           {
               echo "User Name is empty ";
           
           }
           if($pword != $conpword)
           {
               echo "Your password doesn't match ";
           
           }
           if(empty($date))
           {
               echo "Date is empty! ";
           
           }
           if(empty($month))
           {
               echo "Month is empty! ";
           
           }
           if(empty($year))
           {
               echo "Year is empty! ";
           
           }
           else 
           {
               echo "Name: $name, User Name : $uname, You are : $gender, Your DOB is: $date/$month/$year";
           }
       }
   
?>