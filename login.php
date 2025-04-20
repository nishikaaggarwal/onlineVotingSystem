<?php
session_start();
include("connect.php");
$SAP = $_POST['SAP Id'];
$password = $_POST['password'];
$role = $_POST['role'];

$check=mysqli_query($connect,"SELECT * FROM user WHERE SAP Id='$SAP' AND password='$password' AND role='$role'   ");

if(mysqli_num_rows($check)>0){
$userdata = mysqli_fetch_array($check);
$faculty = mysqli_query($connect,"SELECT * FROM user WHERE role=2");
$facultydata= mysqli_fetch_all($faculty, MYSQLI_ASSOC);

$_SESSION['userdata']=$userdata;
$_SESSION['facultydata']=$facultydata;

echo '
    <script>
   window.location = "../routes.dashboard.php";
   </script>
    ';
}
else{
    echo '
    <script>

    alert("Invalid credentials or user not found");
   window.location = "../";
   
    </script>
    ';
}
?>