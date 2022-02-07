<?php
$conn=mysqli_connect("localhost","root","","php-programs");
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
if(isset($_POST['salary_btn'])){
    //$sl=$_POST['limit'];
    $sql2="SELECT empName,salary FROM emp_details WHERE salary<35000";
    $result=mysqli_query($conn,$sql2);
    if($result->num_rows>0){
        echo"<table align='center' cellpadding='8' width='50%' border>
        <tr><th colspan='2'>Employee List whose salary >35000</th></tr>";
        echo"<tr><th>Emplyee Name</th><th>Salary</th></tr>";

        while($res=mysqli_fetch_assoc($result)){
            echo"<tr><td>".$res['empName']."</td><td>".$res['salary']."</td></tr>";
        }
        echo"</table>";
    }
    else
    {
        echo "Error: " . $sqlreturn . "<br>" . mysqli_error($conn);
    }
}


?>