<?php
$SID = 0;
$status = "";
$lastName = "";
$firstName = "";
$state = "";
$city = "";
$zip = "";

if (isset($_POST["submit"])) {
    if (isset($_POST["SID"])) $SID = $_POST["SID"];
    if (isset($_POST["status"])) $status = $_POST["status"];
    if (isset($_POST["lastName"])) $lastName = $_POST["lastName"];
    if (isset($_POST["firstName"])) $firstName = $_POST["firstName"];
    if (isset($_POST["state"])) $state = $_POST["state"];
    if (isset($_POST["city"])) $city = $_POST["city"];
    if (isset($_POST["zip"])) $zip = $_POST["zip"];
    if (empty($SID)) {
        echo "<script>alert('Please enter a shipment ID')</script>";
    }
    if (!empty($SID)) {
        require_once("db.php");
        $sql = "select SID, status, lastName, firstName, state, city, zip from bit4444group41.shipping";
        $result = $mydb -> query($sql);
        $row = mysqli_fetch_array($result);
        if ($row) {
            $SID = $row["SID"];
            $status = $row["status"];
            $lastName = $row["lastName"];
            $firstName = $row["firstName"];
            $state = $row["state"];
            $city = $row["city"];
            $zip = $row["zip"];
            echo "<script>alert('Shipping Details: \\nSID: $SID \\nstatus: $status \\nLast Name: $lastName \\nFirst Name: $firstName \\nState: $state \\nCity: $city \\nZip: $zip')
            alert('Returning to home page...')
            window.location.href = 'AfterEmpLogin.html'</script>";
        }
        else {
            echo "<script>alert('SID is not valid.')</script>";
        }
    }
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Cellar</title>

    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div id="header">
        <p id="pHead">
            302 N Main St, Blacksburg, VA 24060  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;      (540) 953-0651   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       Everday 11:00 AM-2:00 PM        
        </p>
        <img src="images/CellarLogo.jpg" width="220" height="150" alt="Cellar Logo" /> 

            
            <ul class="nav nav-pills nav-justified">
                <li><a href="HomeScreen.html">Home</a></li>
                <li><a href="Menu.html">Menu</a></li>
                <li><a href="review.php">Reviews</a></li>
                <li><a href="Cart.html">Cart</a></li>
                <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"
                role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="Customer_LogIn.php">Customer</a></li>
                      <li><a href="EmpLogin.php">Employee</a></li>
                    </ul>
                </li>
            </ul>  
    </div>
    <div class="login">
        <h1> Find Shipment Order Details</h1>
        <p style = "color:white;">Enter Shipping ID</p>
        <form method="post" action="">
          <p><input type="number" name="SID" value=<?php echo $SID;?> placeholder="Shipment ID"></p>
          <p class="submit"><input type="submit" name="submit" value="Submit"></p>
        </form>
      </div>
    

</body>
</html>