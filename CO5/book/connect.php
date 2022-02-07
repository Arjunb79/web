<?php
$conn=mysqli_connect("localhost","root","","php-programs");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["submit"])){

    $accessno=$_POST["accessno"];
    $title=$_POST["title"];
    $author=$_POST["author"];
    $edition=$_POST["edition"];
    $publisher=$_POST["publisher"];

    $sql="INSERT INTO book_details(accessno,title,author,edition,publisher)VALUES('$accessno','$title','$author','$edition','$publisher')";
    if(mysqli_query($conn,$sql)===TRUE){
        echo"<script>alert('successfully inserted');</script>";

    }
    else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
}
?>