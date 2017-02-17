<?php

        session_start();

        error_reporting(E_ALL ^ E_DEPRECATED);

        $host = 'http://sjksd.000webhostapp.com';
        $user = 'smit';
        $pass = 'smit123';

$con = mysqli_connect("sjksd.000webhostapp.com","smit","smit123","complaint");



          mysqli_select_db($con,'id810194_complaint');

        $email = $_GET['emailid']; 

        $data = "";


       $sql = "select * from random where emailid = '$email'";

       $resu = mysqli_query($con,$sql);
       
       $count = 0;

       while($temp = mysqli_fetch_assoc($resu))
       {
            $count++;

        }

       if ($count > 0)
       {
            $data  = "email already exist";
       }
        else
       {
          $data = "you can register";
       }
         echo $data;
         mysqli_close($con);
?>