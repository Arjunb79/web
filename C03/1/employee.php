<?php
$conn=mysqli_connect("localhost","root","","php-programs");
if(!$conn){
    die("connection failed".mysqli_connect_error());
}

if(isset($_POST["submit"])){
    $id=$_POST["id"];
    $empname=$_POST["name"];
    $jobname=$_POST["jname"];
    $mngid=$_POST["mid"];
    $salary=$_POST["salary"];

    $sql="INSERT INTO emp_details(empId,empName,jobName,managerId,salary)VALUES(' $id','$empname','$jobname','$mngid','$salary')";
    if(mysqli_query($conn,$sql)){
        echo"<script>alert('detials inserted successfully!!!!!');</script>";
    }
    else{
        echo"error".$sql."<br>".mysqli_error();
    }
}



?>