<?php

$FirstName = "";
$LastName = "";
$email = "";
$phone = "";

if (isset($_POST["modify"])) {
    if (isset($_POST["FirstName"])) $FirstName = $_POST["FirstName"];
    if (isset($_POST["LastName"])) $LastName = $_POST["LastName"];
    if (isset($_POST["email"])) $address = $_POST["email"];
    if (isset($_POST["phone"])) $phone = $_POST["phone"];


        require_once("db.php");
        $sql = "update bit4444group41.order SET FirstName = '$FirstName', LastName = '$LastName', Email = '$email', Phone = '$phone'";
        $result = $mydb->query($sql);

        if ($result == 1) {
            echo '<script>alert("You have successfully updated the order.... redirecting to order management page.")
            window.location.href = "CustomerOrders.php";
            </script>';
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
                <li><a href="Menu.php">Menu</a></li>
                <li><a href="review.php">Reviews</a></li>
                <li><a href="Cart.php">Cart</a></li>
                <li role="presentation" class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"
                role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="Customer_login.php">Customer</a></li>
                      <li><a href="EmpLogIn.php">Employee</a></li>
                    </ul>
                </li>
            </ul>  
    </div>
    <form method="post"action="<?php echo $_SERVER['PHP_SELF']?>">
    <div id="modify">
    <label>Customer First Name:
      <input type="text" name=" FirstName" placeholder = "First Name" value = "<?php echo $FirstName; ?>" size="20"  autofocus>
    </label><br /> 
    <label>Customer Last Name:
      <input type="text" name=" LastName" placeholder = "Last Name" value = "<?php echo $LastName; ?>" size="20" >
    </label><br />
    <label>Email:
      <input type="text" name = "email" placeholder="name@domain.com" value = "<?php echo $email; ?>">
    </label><br />
    <label>Phone Number
      <input type="text" name="phone" placeholder = " (XXX-XXX-XXXX)"; value = "<?php echo $phone; ?>">
    </label> <br />

      <input type="Submit" name = "modify" value="Update order info">

  </form>
  </div> 


</body>
</html>