<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'wldnrwldnr1',
    'mydb'
);

$username = $_POST['username'];
$sql = "select * from user where id = '".$username."' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if (mysqli_num_rows($result) > 0) { // 아이디 혹은 비번 불일치
    echo "사용불가능한 아이디입니다.";
//echo $sql;
//echo mysqli_num_rows($result);
} else { // 로그인 성공
    echo "사용가능한 아이디입니다.";
    //echo mysqli_num_rows($result);
}
mysqli_close($conn);
