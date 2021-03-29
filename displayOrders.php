  <?php
  $OID = 0;
  if(isset($_GET['OID'])) $OID=$_GET['OID'];

  require_once("db.php");

  $sql = "";
  if($OID==0)
    $sql ="select * from bit4444group41.order";
  else {
    $sql ="select * from bit4444group41.order where OID=".$OID;
    }
  $result = $mydb->query($sql);

  echo "<table>";
  echo "<thead>";
  echo "<th>OID</th><th>Price</th><th>First Name</th><th>Last Name</th><th>Phone Number</th>";
  echo "</thead>";

    while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>".$row["OID"]."</td>
            <td>".$row["Price"]."</td>
            <td>".$row["FirstName"]."</td>
            <td>".$row["LastName"]."</td>
            <td>".$row["Phone"]."</td>";
      echo "</tr>";
    }

  ?>
