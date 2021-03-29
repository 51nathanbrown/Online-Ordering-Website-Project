<?php
$pID = 0;
$price = 0;
$name = "";
$error = false;
if (isset($_POST["submit"])) {
    if (isset($_POST["pID"])) $pID = $_POST["pID"];
    if (isset($_POST["price"])) $price = $_POST["price"];
    if (isset($_POST["name"])) $name = $_POST["name"];
    if (empty($pID) || $pID < 0) {
        $error = true;
    }
    if (!$error) {
        if (empty($price) && empty($name)) {
            echo "<script>alert('Please enter one product modification')</script>";
        }
        else if (!empty($price) && empty($name)) {
            require_once("db.php");
            $sql = "update bit4444group41.product set Price = $price where PID = $pID";
            $result = $mydb->query($sql);
            if ($result === true) {
                echo "<script>alert('Product has been updated... redirecting to home page.')
                window.location.href = 'AfterEmpLogin.html'</script>";
            }
            else {
                $error = true;
            }
        }
        else if (empty($price) && !empty($name)) {
            require_once("db.php");
            $sql = "update bit4444group41.product set PName = '$name' where PID = $pID";
            $result = $mydb->query($sql);
            if ($result === true) {
                echo "<script>alert('Product has been updated... redirecting to home page.')
                window.location.href = 'AfterEmpLogin.html'</script>";
            }
            else {
                $error = true;
            }
        }
        else if (!empty($price) && !empty($name)) {
            require_once("db.php");
            $sql = "update bit4444group41.product set Price = $price, PName = '$name' where PID = $pID";
            $result = $mydb->query($sql);
            if ($result === true) {
                echo "<script>alert('Product has been updated... redirecting to home page.')
                window.location.href = 'AfterEmpLogin.html'</script>";
            }
            else {
                $error = true;
            }
        }
    }
    else {
        echo "<script>alert('You have invalid inputs.')</script>";
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
        <h1>Modify Products</h1>
        <p style = "color:white;">Enter Product ID of product to be modified</p>
        <form method="post" action="">
          <p><input type="number" name="pID" value=<?php echo $pID;?> placeholder="Product ID"></p>
          <p style = "color:white;">Enter at least one modification</p>
          <p><input type="number" name="price" value=<?php echo $price;?> placeholder="Price" step = .01></p>
          <p><input type="text" name="name" value="<?php echo $name;?>" placeholder = "New Name"></p>
          <p class="submit"><input type="submit" name="submit" value="Submit"></p>
        </form>
      </div>

</body>
</html>