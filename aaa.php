<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'wldnrwldnr1',
    'mydb'
);

$sql = "select * from user";
$result = mysqli_query($conn, $sql);
$str = "";

while ($row = mysqli_fetch_array($result)) {
    $str = $str."id: ".$row['id']." pw: ".$row['pw']." \n";

    echo $str;
}
