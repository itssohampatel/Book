<?php
include '../../php/database.php';
session_start();
$id=$_POST['id'];
$pass=$_POST['pass'];
$sql="select * from admin where id='$id' and password='$pass'";
$result=mysqli_query($db,$sql);
if(mysqli_num_rows($result)==1){
    echo "success";
    $_SESSION['id']=$id;
}else if(mysqli_num_rows($result)==0)
    echo "wrong username or password!";
else{
    echo mysqli_error($db);
}
mysqli_close($db);
?>