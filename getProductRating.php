<?php 
    require_once("db.php");
    $sql = "select Rating as Rating, count(PID) as ProdCount from bit4444group41.product group by Rating order by Rating asc";
    $result = $mydb->query($sql);
    $data = array();
    for ($x = 0; $x < mysqli_num_rows($result); $x++) {
        $data[] = mysqli_fetch_assoc($result);
    }

    echo json_encode($data);
?>