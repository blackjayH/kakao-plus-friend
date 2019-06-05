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

if (mysqli_num_rows($result) > 0) { // 아이디 중복
    echo "사용불가능한 아이디입니다.";
} else { // 아이디 체크 완료
    echo "사용가능한 아이디입니다.";
}

mysqli_close($conn);
