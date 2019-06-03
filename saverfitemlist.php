<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'wldnrwldnr1',
    'mydb'
);

$res = json_decode($_POST['json'], true);
for ($i = 0 ; $i < count($res) ; $i++) {
    //$sql = "INSERT INTO user(id,pw) VALUES ('".$res[$i]['item']."','".$res[$i]['tf']."')";
    $sql = "INSERT INTO rfitemlist VALUES ('".$res[$i]['userid']."','".$res[$i]['item']."','".$res[$i]['enrolldate']."','".$res[$i]['amount']."','".$res[$i]['position']."','".$res[$i]['category']."','".$res[$i]['expirydate']."','".$res[$i]['detail']."')";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
}

mysqli_close($conn);
