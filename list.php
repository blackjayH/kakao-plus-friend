<?php
session_start();
$conn = mysqli_connect(
    'localhost',
    'root',
    'wldnrwldnr1',
    'mydb'
);

$username = $_POST['username'];
//$sql = "select * from list where name = '".$username."'";
$sql = "select * from list";
$result = mysqli_query($conn, $sql);
//$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
    echo $row['name']." ".$row['amount'];
}

mysqli_close($conn);
