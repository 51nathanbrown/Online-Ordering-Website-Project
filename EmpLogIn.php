<?php
$email = "";
$password = "";
$error = false;
$loginOK = null;
if (isset($_POST["submit"])) {
    if (isset($_POST["email"])) $email = $_POST["email"];
    if (isset($_POST["password"])) $password = $_POST["password"];
    if (empty($email) || empty($password)) {
        $error = true;
    }
    if (!$error) {
        require_once("db.php");
        $sql = "select email, password from bit4444group41.employee where email = '$email' and password = '$password'";
        $result = $mydb->query($sql);
        $row = mysqli_fetch_array($result);
        if ($row) {
            if (strcmp($email, $row["email"]) == 0 && strcmp($password, $row["password"]) == 0) {
                $loginOK = true;
            } else {
                $loginOK = false;
            }
            if ($loginOK) {
                echo '<script>alert("You have successfully logged in... redirecting to home page.")
                window.location.href = "AfterEmpLogin.html"
                </script>';
            } else if (!$loginOK) {
                echo "<script>alert('Please ensure you have entered the correct information')</script>";
            }
        } else {
            echo "<script>alert('Please enter a valid Log-in')</script>";
        }
    }
    else {
        echo "<script>alert('Email or passsword cannot be empty.')</script>";
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
                      <li><a href="Customer_Login.php">Customer</a></li>
                      <li><a href="ModifyCustomer.php">Account Settings</a></li>
                      <li><a href="EmpLogin.php">Employee</a></li>
                    </ul>
                </li>
            </ul>  
    </div>
    <div class="login">
        <h1>Employee Log in</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
          <p><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email"></p>
          <p><input type="password" name="password" value="<?php echo $password;?>" placeholder="Password"></p>
          <p class="remember_me">
            <label>
              <input type="checkbox" name="remember_me" id="remember_me">
              Remember me on this computer
            </label>
          </p>
          <p class="submit"><input type="submit" name="submit" value="Login"></p>
        </form>
      </div>

    


</body>
</html>