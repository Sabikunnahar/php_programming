
<?php
// creating database usinh php
 $conn= new mysqli('localhost', 'root', database:"eshop");
 // selecting database usinh php
 $retval = mysqli_select_db( $conn, 'eshop' );
 $conn -> query("CREATE TABLE user(
    id int,
    name var(100),
    email var(100),
    cell var(15),

 )");


if(! $conn ) {
    die('Could not connect: ' . mysqli_error($conn));
 }
 echo 'Connected successfully<br />';
 


 if(! $retval ) {
    die('Could not select database: ' . mysqli_error($conn));
 }
 echo "Database TUTORIALS selected successfully\n";
 mysqli_close($conn);
?>




