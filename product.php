<?php

   
    require_once 'config/connect.php';

   
    $product_id = $_GET['id'];
    



    $product = mysqli_query($connect, "SELECT * FROM `PRO` WHERE `id` = '$product_id'");
  
   

   

    $product = mysqli_fetch_assoc($product);
    
   
    


    $comments = mysqli_query($connect, "SELECT * FROM `comments` WHERE `product_id` = '$product_id'");

    
    

 