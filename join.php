<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'wldnrwldnr1',
    'mydb'
);

$username = $_POST['id'];
$password = $_POST['pw'];
$sql = "INSERT INTO user(id,pw) VALUES ('".$username."','".$password. "')";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo"회원가입 완료";
/*
if (mysqli_fetch_array($result) ==0) {
    echo"회원가입 완료";
}
if (mysqli_num_rows($result) > 0) { // 회원가입 완료
    echo $sql;
//echo "로그인 성공";
    //echo mysqli_num_rows($result);
} else { // 로그인 성공
    echo $sql;
    //echo "아이디와 비밀번호를 확인해주세요";
    //echo mysqli_num_rows($result);
}
*/

mysqli_close($conn);
