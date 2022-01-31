<?php
$conn=mysqli_connect("localhost","root","","ccjitterss");
if($conn){
$name=$_POST['Name'];
$email_id=$_POST['Email'];
$phone=$_POST['Phone'];
$address=$_POST['Address'];
$city=$_POST['City'];
$state=$_POST['State'];
<<<<<<< HEAD:registration-connect.php
$password_enc=$_POST['password'];
$photo=$_FILES["photo1"]["name"];
$images="profile-logo/".$photo;
=======
$Password=$_POST['password'];
$password_enc=password_hash($Password,PASSWORD_BCRYPT);

$query="INSERT INTO registration(`Name`,`Email`,`Phone`,`Address`,`City`,`State`,`password`) VALUES('$name','$email_id','$phone',$address,'$city','$state','$Password')";
$r=mysqli_query($conn,$query);
>>>>>>> 28ded53b294faa6b0524fc77ee46b1c7acacf95e:registration-connect2.php

$q="INSERT INTO `registration`(`Name`, `Email`, `Phone`, `Address`, `City`, `State`, `password`, `file`) VALUES ('$name','$email_id','$phone','$address','$city','$state','$password_enc','$images')";
$r=mysqli_query($conn,$q);
if($r==1)
{
    move_uploaded_file($_FILES['photo1']['tmp_name'],$images);
    echo ' <script type="text/javascript">
    alert("Registration Successfull!! :)");
    location="index.php";
    </script>'; 
}
else
{
    echo ' <script type="text/javascript">
    alert("Registration Failed :( ");
    location="index.php";
    </script>'; 
}
}
else{
    echo ' <script type="text/javascript">
    alert("Connection Error :)");
    location="index.php";
    </script>'; 
}
?>