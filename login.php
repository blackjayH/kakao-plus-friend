<?php
session_start();
$conn = mysqli_connect(
    'localhost',
    'root',
    'wldnrwldnr1',
    'mydb'
);

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from user where id = '".$username."' AND pw = '".$password. "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if (mysqli_num_rows($result) > 0) { // 아이디 혹은 비번 불일치
    echo "로그인 성공";
//echo mysqli_num_rows($result);
} else { // 로그인 성공
    echo "아이디와 비밀번호를 확인해주세요";
    //echo mysqli_num_rows($result);
}
mysqli_close($conn);
