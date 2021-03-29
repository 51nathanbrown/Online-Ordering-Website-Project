<?php
$pID = 0;
$prodName = "";
$desc = "";
$price = 0;
$weight = 0;
$stock = 0;
if (isset($_POST["submit"])) {
    if (isset($_POST["pID"])) $pID = $_POST["pID"];
    if (isset($_POST["name"])) $prodName = $_POST["name"];
    if (empty($pID) && empty($prodName)) {
        echo "<script>alert('Please enter a product name.')</script>";
    }
    if (empty($pID) && !empty($prodName)) {
        require_once("db.php");
        $sql = "select PID, Pname, PDesc, PPrice, PWeight, PStockNumber from bit4444group41.product where Pname = '$prodName'";
        $result = $mydb -> query($sql);
        $row = mysqli_fetch_array($result);
        if ($row) {
            $pID = $row["PID"];
            $prodName = $row["Pname"];
            $desc = $row["PDesc"];
            $price = $row["PPrice"];
            $weight = $row["PWeight"];
            $stock = $row["PStockNumber"];
            echo "<script>alert('Search Results: \\nPID: $pID \\nName: $prodName\\nDescription: $desc\\nPrice: $price\\nWeight: $weight\\nStock: $stock')</script>";
        }
        else {
            echo "<script>alert('Product name is not valid.')</script>";
        }
    }
    if (!empty($pID) && empty($prodName)) {
        require_once("db.php");
        $sql = "select Pname, PDesc, PPrice, PWeight, PStockNumber from product where PID = $pID";
        $result = $mydb -> query($sql);
        $row = mysqli_fetch_array($result);
        if ($row) {
            $prodName = $row["Pname"];
            $desc = $row["PDesc"];
            $price = $row["PPrice"];
            $weight = $row["PWeight"];
            $stock = $row["PStockNumber"];
            echo "<script>alert('Search Results: \\nPID: $pID \\nName: $prodName\\nDescription: $desc\\nPrice: $price\\nWeight: $weight\\nStock: $stock')</script>";
        }
        else {
            echo "<script>alert('Product ID is not valid.')</script>";
        }
    }
    if (!empty($pID) && !empty($prodName)) {
        require_once("db.php");
        $sql = "select Pname, PDesc, PPrice, PWeight, PStockNumber from product where Pname = '$prodName' and PID = $pID";
        $result = $mydb -> query($sql);
        $row = mysqli_fetch_array($result);
        if ($row) {
            $prodName = $row["Pname"];
            $desc = $row["PDesc"];
            $price = $row["PPrice"];
            $weight = $row["PWeight"];
            $stock = $row["PStockNumber"];
            echo "<script>alert('Search Results: \\nPID: $pID \\nName: $prodName\\nDescription: $desc\\nPrice: $price\\nWeight: $weight\\nStock: $stock')</script>";
        }
        else {
            echo "<script>alert('Product name or product ID is invalid.')</script>";
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
        <h1>Product Search</h1>
        <p style = "color:white;">Enter Product ID and/or Product Name</p>
        <form method="post" action="">
          <p><input type="number" name="pID" value=<?php echo $pID;?> placeholder="Product ID"></p>
          <p><input type="text" name="name" value="<?php echo $prodName;?>" placeholder="Product Name"></p>
          <p class="submit"><input type="submit" name="submit" value="Submit"></p>
        </form>
      </div>
    

</body>
</html>