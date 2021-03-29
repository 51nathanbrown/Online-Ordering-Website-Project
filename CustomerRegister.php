<?php
$email = "";
$password = "";
$fname = "";
$lname = "";
$street = "";
$city = "";
$state = "";
$country = "";
$postal = "";
$CID = null;

$error = false;
$loginOK = null;
if (isset($_POST["submit"])) {
    if (isset($_POST["email"])) $email = $_POST["email"];
    if (isset($_POST["password"])) $password = $_POST["password"];
    if (isset($_POST["fname"])) $fname = $_POST["fname"];
    if (isset($_POST["lname"])) $lname = $_POST["lname"];
    if (isset($_POST["street"])) $street = $_POST["street"];
    if (isset($_POST["city"])) $city = $_POST["city"];
    if (isset($_POST["state"])) $state = $_POST["state"];
    if (isset($_POST["country"])) $country = $_POST["country"];
    if (isset($_POST["postal"])) $postal = $_POST["postal"];
    if (empty($email) || empty($password) || empty($fname) || empty($lname) || empty($street) || empty($city) || empty($state) || empty($country) || empty($postal)) {
        $error = true;
    }
    if (!$error){
        require_once("db.php");
        $sql = "insert into bit4444group41.customer(FirstName, LastName, Email, Password, StreetAddress, City, State, Country, PostalCode) 
        values ('$fname', '$lname', '$email', '$password', '$street', '$city', '$state', '$country', '$postal')";
        $result = $mydb->query($sql);

        if ($result == 1) {
            echo '<script>alert("You have successfully registered... redirecting to home page.")
            window.location.href = "HomeScreen.html";
            </script>';
        } 
    }
    else{
        echo '<script>alert("Please complete all fields to register.")
        window.location.href = "Register.php";
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
                      <li><a href="Customer_Login.php">Customer</a></li>
                      <li><a href="ModifyCustomer.php">Account Settings</a></li>
                      <li><a href="EmpLogin.php">Employee</a></li>
                    </ul>
                </li>
            </ul>  
    </div>

    
    <div class="login">
        <h1>Customer Registration</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
          <p><input type="text" name="email" value="<?php echo $email; ?>" placeholder="Username or Email"></p>
          <p><input type="password" name="password" value="<?php echo $password; ?>" placeholder="Password"></p>
          <p><input type="text" name="fname" value="<?php echo $fname; ?>" placeholder="First Name"></p>
          <p><input type="text" name="lname" value="<?php echo $lname; ?>" placeholder="Last Name"></p>
          <p><input type="text" name="street" value="<?php echo $street; ?>" placeholder="Street Address"></p>
          <p><input type="text" name="city" value="<?php echo $city; ?>" placeholder="City"></p>
          <p><input type="text" name="state" value="<?php echo $state; ?>" placeholder="State"></p>
          <p><input type="text" name="country" value="<?php echo $country; ?>" placeholder="Country"></p>
          <p><input type="text" name="postal" value="<?php echo $postal; ?>" placeholder="Postal Code"></p>

          <p class="submit"><input type="submit" name="submit" value="Register"></p>
          

        </form>
      </div>
      

</div>
</body>
</html>