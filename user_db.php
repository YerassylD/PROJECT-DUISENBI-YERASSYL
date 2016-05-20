<?php
    $conn = mysqli_connect("localhost","Yerassyl","87053163124","SF");
    $query = "SELECT * FROM `SF` ORDER BY `id`";
    $result = mysqli_query($conn, $query);
    $num = $result->num_rows;
    for ($i=0;$i<$num;$i++){
        $row = $result->fetch_assoc();
    }
?>