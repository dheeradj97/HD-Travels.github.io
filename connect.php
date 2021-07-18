<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php

$name=$_GET['name'];
$email=$_GET['email'];
$comment=$_GET['comment'];

//echo $username;

$con= mysqli_connect('localhost:3307','root','','hd-travels');
// if ($con)
// {
//     echo "Connection ok";

// }
// else {
//     die("connection failed".mysqli_connect_error());
// }
$query = "insert into contact values('$name','$email','$comment')";

//$query = "insert into tbl_register values('1','1','1','1')";

$data= mysqli_query($con, $query);

if($data)
{
    
    // echo "Data inserted successfully";
}

mysqli_close ($db_conx);
    echo "<META http-equiv=\"refresh\" content=\"0;URL=index.html\">";
    echo '<script type="text/javascript">';
    echo 'alert("Thank you! Your request has been successfully sent.")';
    echo '</script>';
?>