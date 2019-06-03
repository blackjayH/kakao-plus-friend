<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'wldnrwldnr1',
    'mydb'
);


$result = array();

/*
$sql = "select * from shoppinglist";
$res = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($res)) {
    array_push($result, array('userid'=>$row[0],'item'=>$row[1],'enrolldate'=>$row[2],'nf'=>$row[3],'direction'=>$row[4],'tf'=>$row[5]));
}
$tt = json_encode($result);
$sql1 = "INSERT INTO test VALUES ('".$tt."')";
mysqli_query($conn, $sql1);
*/

//$sql1 = "select json_object('nf', nf, 'tf', tf, 'item', item, 'userid', userid, 'direction', direction) from test";
$sql1 = "select * from test";
$res = mysqli_query($conn, $sql1);
while ($row = mysqli_fetch_array($res)) {
    array_push($result, $row);
}
//echo $result;
echo json_encode($result);
/*$temp = mysqli_query($conn, $sql1);
if ($temp == false) {
    echo "실패";
}
*/
//echo $result;
//echo "응";

mysqli_close($conn);
