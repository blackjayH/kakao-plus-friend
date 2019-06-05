<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'wldnrwldnr1',
    'mydb'
);

$sql = "select * from rfitemlist where id = '".$_SESSION['id']."'";
$res = mysqli_query($conn, $sql);

$result = array();

while ($row = mysqli_fetch_array($res)) { // 아이디 혹은 비번 불일치
    array_push($result, array('userid'=>$row[0],'item'=>$row[1],'enrolldate'=>$row[2],'amount'=>$row[3],'position'=>$row[4],'category'=>$row[5],'expirydate'=>$row[6],'detail'=>$row[7]));
}

echo json_encode(array("result"=>$result));

mysqli_close($conn);
