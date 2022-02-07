<?php
$conn=mysqli_connect("localhost","root","","php-programs");
if(!$conn){
    die("coonection failed ".mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $qnty=$_POST['qnty'];
    $price=$_POST['price'];

    $sql="INSERT INTO shop(name,quantity,price)VALUES('$name','$qnty','$price')";

    if(mysqli_query($conn,$sql)===TRUE){
        echo"<script>alert('inserted....');</script>";
    }
}
else {
    echo"<h1>error</h1>".mysqli_error($conn);
}


?>