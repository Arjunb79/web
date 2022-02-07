<?php
$conn=mysqli_connect("localhost","root","","php-programs");
if(!$conn){
    die("coonection failed ".mysqli_connect_error());
}




if(isset($_POST['shop'])){
    $sql1="SELECT * FROM shop";

    $data=mysqli_query($conn,$sql1);
    if($data->num_rows>0){
        echo"<table align='center' cellpadding='8' width='50%' border>";
            echo"<tr><th>Name</th><th>Quantity</th><th>Price</th></tr>";
            while($res=mysqli_fetch_assoc($data))
            {
            echo"<tr><td>".$res['name']."</td><td>".$res['quantity']."</td><td>".$res['price']."</td></tr>";
            
        }
        echo"</table>";

    }
    else {
        echo"<h1>oops no data found</h1>";
    }
}
?>