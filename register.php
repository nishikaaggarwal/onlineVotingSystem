<?php
include("connect.php");

$name=$_POST['Name'];
$SAP=$_POST['SAP Id'];
$Roll=$_POST['Roll Number'];
$Password=$_POST['password'];
$Confirm=$_POST['confirm password'];
$image= $_FILES['name']['photo'];
$tmp_name=$_FILES['tmp_name']['photo'];
$role = $_POST['role'];
if($Password ==$Confirm){
move_uploaded_file($tmp_name,"../uploads/$image");
$insert = mysqli_query($connect,"INSERT INTO user(name,SAP Id,Roll Number,Password,Confirm Password,photo,role,status,votes) VALUES('$name','$SAP','$Roll','$Password','$Confirm','$$image','$$role',0,0)");
if($insert){
    echo'
    <script>

    alert("Registration Successfull");
   window.location = "../";
   
    </script>';
}
else{
    echo'
    <script>

    alert("Some error occured");
   window.location = "../routes/register.html";
   
    </script>';

}
}
else{
    echo'
    <script>

    alert("password and confirm password does not match!");
   window.location = "../routes/register.html";
   
    </script>';

}
?>php;