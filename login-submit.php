
<?php
$conn=mysqli_connect('localhost','root','','ccjitterss');
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$var="SELECT * from registration where Email='$email'";
$query=mysqli_query($conn,$var);
$res=mysqli_fetch_array($query);
$pass_check=password_verify($password,$res['password']);
$_SESSION['bio']=$res;
if(mysqli_num_rows($query))
{
    if($res['Name']=='admin' && $res['password']=="admin")
    header("location:Admin.php?msg=done");
    else if($res['Name']=='employee' && $res['password']=="ccjitterssemployee2022")
    header("location:employee.php?msg=done");
    if($pass_check==1)
    header("location:welcome2.php?");
}
else
{
    header("location:login.php?msg=wrong email id or password");  
}
?>