<?php
   $con=mysqli_connect("localhost","root","","worldtour");
   if(!$con){
        // die("Connection failed...!");
   }else{
        // echo "Connection successfully...!";
   }

   if(isset($_POST['submit'])){
    $email=$_POST['email'];

    if($email==""){

    }else{
        $sql="INSERT INTO subscribemail VALUES('','".$email."')";
        if(mysqli_query($con,$sql)){
            echo "Data inserted....!";
        }else{
            echo "Data not inserted...!";
        }
    }
}



?>