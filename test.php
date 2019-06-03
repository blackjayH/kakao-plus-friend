<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'wldnrwldnr1',
    'mydb'
);
$id = $_POST['id'];
$pw = $_POST['pw'];

echo $id;
echo $pw;
$sql = "INSERT INTO user(id,pw) VALUES ('".$id."','".$pw."')";
//echo $sql;


$result = mysqli_query($conn, $sql);

if ($result == false) {
    echo "실패";
}
mysqli_close($conn);
