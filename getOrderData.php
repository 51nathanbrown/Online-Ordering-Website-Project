<?php 
    require_once("db.php");
    $sql = "select state as state, count(SID) as OrderCount from bit4444group41.shipping group by state order by OrderCount desc";
    $result = $mydb->query($sql);
    $data = array();
    for ($x = 0; $x < mysqli_num_rows($result); $x++) {
        $data[] = mysqli_fetch_assoc($result);
    }

    echo json_encode($data);
?>