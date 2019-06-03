<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'wldnrwldnr1',
    'mydb'
);

$result = mysqli_query($conn, "
    INSERT INTO user (
        id,
        pw
    ) VALUES (
        '7','7'
    )");
