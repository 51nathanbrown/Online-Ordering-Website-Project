<?php
$OID = 0;
$ItemName = "";
$Price = 0;
$FirstName = "";
$LastName = "";
$Phone = "";
$Address = "";

if (isset($_POST["submit"])) {
    if (isset($_POST["OID"])) $OID = $_POST["OID"];
    if (isset($_POST["ItemName"])) $ItemName = $_POST["ItemName"];
    if (isset($_POST["Price"])) $Price = $_POST["Price"];
    if (isset($_POST["FirstName"])) $FirstName = $_POST["FirstName"];
    if (isset($_POST["LastName"])) $LastName = $_POST["LastName"];
    if (isset($_POST["Phone"])) $Phone = $_POST["Phone"];
    if (isset($_POST["Address"])) $Address = $_POST["Address"];
    if (empty($OID)) {
        echo "<script>alert('Please enter a order ID')</script>";
    }
    if (!empty($OID)) {
        require_once("db.php");
        $sql = "select OID, ItemName, Price, FirstName, LastName, Phone, Address from bit4444group41.order";
        $result = $mydb -> query($sql);
        $row = mysqli_fetch_array($result);
        if ($row) {
            $OID = $row["OID"];
            $ItemName = $row["ItemName"];
            $Price = $row["Price"];
            $FirstName = $row["FirstName"];
            $LastName = $row["LastName"];
            $Phone = $row["Phone"];
            $Address = $row["Address"];
            echo "<script>alert('Search Results: \\nOID: $OID \\nItemName: $ItemName \\nPrice: $Price \\nFirstName: $FirstName \\nLastName: $LastName \\nPhone: $Phone \\nAddress: $Address')
            alert('Returning to home page...')
            window.location.href = 'AfterEmpLogin.html'</script>";
        }
        else {
            echo "<script>alert('OID is not valid.')</script>";
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
        <h1>Search for Order</h1>
        <p style = "color:white;">Enter Order ID</p>
        <form method="post" action="">
          <p><input type="number" name="OID" value=<?php echo $OID;?> placeholder="Order ID"></p>
          <p class="submit"><input type="submit" name="submit" value="Submit"></p>
        </form>
      </div>
    

</body>
</html>