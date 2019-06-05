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

echo "회원가입 완료";
/*
if (mysqli_num_rows($result) > 0) { // 회원가입 완료
    echo "회원가입 완료";
} else { // 회원가입 실패
    echo "회원가입 실패";
}
*/

mysqli_close($conn);
