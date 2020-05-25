<?php
    include_once 'c.php';

    $first=$_POST['first_name'];
    $last=$_POST['last_name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];


$sql="insert into contact_us (f_name,l_name,phone,email,msg)values('$first','$last','$phone',' $email','$msg');";
mysqli_query($conn, $sql);

header("location:thanku.html?Signup=success");
