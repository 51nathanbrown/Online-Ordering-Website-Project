<?php
$SID = 0;
$status = "";

$error = false;
if (isset($_POST["submit"])) {
    if (isset($_POST["SID"])) $SID = $_POST["SID"];
    if (isset($_POST["status"])) $status = $_POST["status"];
    if (empty($SID) || $SID < 1) {
        $error = true;
    }
    if (!$error) {
        if (empty($status)) {
            echo "<script>alert('Please enter a new shipping status')</script>";
        }
        else if (!empty($status)) {
            require_once("db.php");
            $sql = "update bit4444group41.shipping set status = '$status' where SID = $SID";
            $result = $mydb->query($sql);
            if ($result === true) {
                echo "<script>alert('Shipping Status has been updated... redirecting to Employee Home Page.')
                window.location.href = 'AfterEmpLogin.html'</script>";
            }
            else {
                $error = true;
            }
        }
        
            
        
    }
    else {
        echo "<script>alert('Please ensure you have entered the correct SID.')</script>";
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
        <h1>Modify Shipping Status</h1>
        <p style = "color:white;">Enter shipping ID of status to be modified</p>
        <form method="post" action="">
          <p><input type="number" name="SID" value="<?php echo $SID;?>" placeholder="Shipping ID"></p>
          <p style = "color:white;">Enter New Status</p>
          <p><input type="text" name="status" value="<?php echo $status;?>" placeholder="New Status"></p>
          <p class="submit"><input type="submit" name="submit" value="Submit"></p>
        </form>
      </div>

</body>
</html>