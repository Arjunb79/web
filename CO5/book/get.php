<?php
$conn=mysqli_connect("localhost","root","","php-programs");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['ssubmit']))
{

    $stitle=$_POST['stitle'];
    $sql2="SELECT * FROM `book_details` WHERE title='$stitle'";
    $data=mysqli_query($conn,$sql2);
    if($data->num_rows>0){
        while($res=mysqli_fetch_assoc($data)){
            echo"<table align='center' cellpadding='8' width='50%' border>";
            echo"<tr><th colspan='2'><center><font style='color:cyan;'>BOOK DETAILS</font></center></th></tr>";
            echo"<tr><th>Accession number</th><td>".$res["accessno"]."</td></tr>";
            echo"<tr><th>Title</th><td>".$res["title"]."</td></tr>";
            echo"<tr><th>Author</th><td>".$res["author"]."</td></tr>";
            echo"<tr><th>Editon</th><td>".$res["edition"]."</td></tr>";
            echo"<tr><th>Publisher</th><td>".$res["publisher"]."</td></tr>";
            echo"</table>";
        }
    }
    else {
        echo "<h1>OOPS..no results found</h1>";
    }
}
?>