<?php   
session_start();
$con = mysqli_connect('localhost','root','1234');
mysqli_select_db( $con, 'users');
$name=$_POST['uname'];
$pass=$_POST['pwd'];
$s="select * from customer where username ='$name' && password='$pass'";
$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['uname']=$name;
    header('location:file.php');
}
else{
    echo '<script>alert("user not found")</script>';
}

?>