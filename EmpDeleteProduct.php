<?php
$pID = 0;
if (isset($_POST["submit"])) {
    if (isset($_POST["pID"])) $pID = $_POST["pID"];
    if (!empty($pID) || $pID > 0) {
        require_once("db.php");
        $sql = "delete from bit4444group41.product where PID = $pID";
        $result = $mydb -> query($sql);
        if ($result) {
            echo "<script>alert('Product has been successfully deleted... redirecting to home page.')
            window.location.href = 'AfterEmpLogin.html'
            </script>";
        }
        else {
            echo '<script>alert("Please enter a product ID that exists")</script>';
        }
    }
    else {
        echo '<script>alert("Please enter a valid product ID")</script>';
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
        <h1>Delete A Product</h1>
        <form method="post" action="">
          <p><input type="number" name="pID" value=<?php echo $pID; ?> placeholder="Product ID"></p>
          <p class="submit"><input type="submit" name="submit" value="Submit"></p>
        </form>
      </div>

    

</body>
</html>