<?php
$email = "";
$newemail = "";
$newpassword = "";
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
    if (isset($_POST["newemail"])) $newemail = $_POST["newemail"];
    if (isset($_POST["newpassword"])) $newpassword = $_POST["newpassword"];
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
        $sql = "select email, password from bit4444group41.customer where email = '$email' and password = '$password'";
        $result = $mydb->query($sql);
        $row = mysqli_fetch_array($result);
        if ($row) {
            if (strcmp($email, $row["email"]) == 0 && strcmp($password, $row["password"]) == 0) {
                $loginOK = true;
            } else {
                $loginOK = false;
            }
            if ($loginOK) {
                session_start();
                $_SESSION["email"] = $email;
                $_SESSION["password"] = $password;
                if (empty($newemail)) {
                    $newemail = $email;
                }
                if (empty($newpassword)){
                    $newpassword = $password;                    
                }
                $sql = "Update bit4444group41.customer SET FirstName = '$fname', LastName = '$lname', Email = '$newemail', Password = '$newpassword', StreetAddress = '$street', City = '$city', State = '$state', Country = '$country', PostalCode = '$postal' 
                where email = '$email' and password = '$password'";
                $result = $mydb->query($sql);
               
            echo '<script>alert("You have successfully updated your info... redirecting to home page.")
            window.location.href = "HomeScreen.html";
            </script>';
        } 
    } else if (!$loginOK) {
        echo '<script>alert("Make sure you have entered the correct account information.")
        window.location.href = "ModifyCustomer.php";
        </script>';
    }
    }
    else{
        echo '<script>alert("Please complete all fields to register.")
        window.location.href = "ModifyCustomer.php";
        </script>';
    }
}


if (isset($_POST["delete"])) {
    if (isset($_POST["email"])) $email = $_POST["email"];
    if (isset($_POST["password"])) $password = $_POST["password"];
    if (empty($email) || empty($password)) {
        $error = true;
    }
    if (!$error) {
        require_once("db.php");
        $sql = "select email, password from bit4444group41.customer where email = '$email' and password = '$password'";
        $result = $mydb->query($sql);
        $row = mysqli_fetch_array($result);
        if ($row) {
            if (strcmp($email, $row["email"]) == 0 && strcmp($password, $row["password"]) == 0) {
                $loginOK = true;
            } else {
                $loginOK = false;
            }
            if ($loginOK) {
                session_start();
                $_SESSION["email"] = $email;
                $_SESSION["password"] = $password;
                $sql = "delete from bit4444group41.customer where email = '$email' and password = '$password'";
                $result = $mydb->query($sql);

            echo '<script>alert("You have successfully deleted your account... redirecting to home page.")
            window.location.href = "HomeScreen.html";
            </script>';
        } 
    } else if (!$loginOK) {
        echo '<script>alert("Make sure you have entered the correct account information.")
        window.location.href = "ModifyCustomer.php";
        </script>';
    }
    }
    else{
        echo '<script>alert("Please enter email and password to delete account.")
        window.location.href = "ModifyCustomer.php";
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
        <h1>Update Customer Info</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
          <p><input type="text" name="email" value="<?php echo $email; ?>" placeholder="Current Email"><input type="password" name="password" value="<?php echo $password; ?>" placeholder="Password"></p>
          <p></p>
          <p><input type="text" name="newemail" value="<?php echo $newemail; ?>" placeholder="New Email"><input type="password" name="newpassword" value="<?php echo $newpassword; ?>" placeholder="New Password"></p>
          <p></p>
          <p><input type="text" name="fname" value="<?php echo $fname; ?>" placeholder="First Name"><input type="text" name="lname" value="<?php echo $lname; ?>" placeholder="Last Name"></p>
          <p></p>
          <p><input type="text" name="street" value="<?php echo $street; ?>" placeholder="Street Address"><input type="text" name="city" value="<?php echo $city; ?>" placeholder="City"></p>
          <p></p>
          <p><input type="text" name="state" value="<?php echo $state; ?>" placeholder="State"><input type="text" name="country" value="<?php echo $country; ?>" placeholder="Country"></p>
          <p></p>
          <p><input type="text" name="postal" value="<?php echo $postal; ?>" placeholder="Postal Code"></p>

          <p class="submit"><input type="submit" name="delete" value="Delete"><input type="submit" name="submit" value="Update"></p>
          

        </form>
      </div>
</body>
</html>