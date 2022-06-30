<?php

   $connection = mysqli_connect('localhost','root','','book_db');
   ?>
   <script>
   alert("Connection Sucessfully");
   </script>
   <?php
   if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $university_name = $_POST['university_name'];
      $course = $_POST['course'];

      $request = " insert into book_form(name, email, phone, address, university_name, course) values('$name','$email','$phone','$address','$university_name','$course') ";
      mysqli_query($connection, $request);
      ?>
      <script>
      alert("Thank you for registration");
      </script>
       <?php

      header('location:home.php');

   }else{
      echo 'something went wrong please try again!';
   }

?>
