<?php
// database connection code
// $con = mysqli_connect('localhost', 'root', '','cun');
$con = mysqli_connect('localhost', 'root','','cun2');
// get the post records
$txtName = $_POST['nombre'];
$txtEmail = $_POST['apellido'];
$txtMessage = $_POST['email'];
// database insert SQL code
$sql = "INSERT INTO estudiantes (nombre, apellido, email) VALUES ('$txtName', '$txtEmail', '$txtMessage')";
// insert in database
$rs = mysqli_query($con, $sql);
if($rs)
{
echo "Contact Records Inserted";
}
?>
<!--vamos a enviar los datos al programa registro.php
