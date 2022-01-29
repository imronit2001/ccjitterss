<?php
$conn=mysqli_connect('localhost','root','', 'ccjitterss');
$name=$_POST['Name'];
$email_id=$_POST['Email'];
$phone=$_POST['Phone'];
$address=$_POST['Address'];
$city=$_POST['City'];
$state=$_POST['State'];
$Password=$_POST['password'];
$password_enc=password_hash($Password,PASSWORD_BCRYPT);

$query="INSERT INTO registration(`Name`,`Email`,`Phone`,`Address`,`City`,`State`,`password`) VALUES('$name','$email_id','$phone',$address,'$city','$state','$password_enc')";
$r=mysqli_query($conn,$query);

if($r==1)
{
    echo ' <script type="text/javascript">
    alert("Registration Successfull!! :)");
    location="index.php";
    </script>'; 
}
else
{
    echo ' <script type="text/javascript">
    alert("Registration Failed :( ");
    
    </script>'; 
}
?>