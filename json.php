<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'wldnrwldnr1',
    'mydb'
);

$sql = "select * from user";
$res = mysqli_query($conn, $sql);

$result = array();

while ($row = mysqli_fetch_array($res)) { // 아이디 혹은 비번 불일치
    array_push($result, array('id'=>$row[0],'pw'=>$row[1]));
}

echo json_encode(array("result"=>$result));

mysqli_close($conn);
