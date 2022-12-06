<?php
    $con=mysqli_connect("localhost","root","","worldtour");
    if(!$con){
        di("Connection failed...!");
    }else{
        echo "Connection successfully..!";
    }
    
    if(isset($_POST['submit'])){
            $username=$_POST['username'];
            $password=$_POST['password'];

            if($username=="" && $password==""){

            }else{
                $sql="INSERT INTO logina VALUES('','".$username."','".$password."')";
                if(mysqli_query($con,$sql)){
                    echo "Data inserted....!";
                }else{
                    echo "Data not inserted...!";
                }
            }
    }
 
?>