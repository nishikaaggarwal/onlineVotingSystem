<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:../");
}
?>
<html>
    <head>
        <title>ONLINE VOTING SYSTEM-Dashboard</title>
    </head>
    <body>
        <div id=>
        <button>BACK</button>
        <button>LOGOUT</button>
        <h3>ONLINE VOTING SYSTEM</h3>
       
        </div>
        <hr>
<div id="Student Profile"></div>
<div id="faculty"></div>
    </body>
</html>