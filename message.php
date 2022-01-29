<?php
$conn=mysqli_connect('localhost','root','', 'ccjitterss');
$name=$_POST['name'];
$email_id=$_POST['email'];
$message=$_POST['message'];

$query="INSERT INTO message (Name,email,message) VALUES('$name','$email_id','$message')";
$r=mysqli_query($conn,$query);

if($r==1)
{
    echo ' <script type="text/javascript">
    alert("Messsage Sent Successfully!! :)");
    location="index.php";
    </script>'; 
}
else
{
    echo ' <script type="text/javascript">
    alert("Messsage Sent failed :( ");
    location="index.php";
    </script>'; 
}
?>