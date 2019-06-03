<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'wldnrwldnr1',
    'mydb'
);

$sql = "select * from shoppinglist";
$res = mysqli_query($conn, $sql);

$result = array();

while ($row = mysqli_fetch_array($res)) { // 아이디 혹은 비번 불일치
    array_push($result, array('userid'=>$row[0],'item'=>$row[1],'enrolldate'=>$row[2],'nf'=>$row[3],'direction'=>$row[4],'tf'=>$row[5]));
}

//echo json_encode(array("result"=>$result));
echo json_encode($result);
//echo $result;
//echo "응";

mysqli_close($conn);
