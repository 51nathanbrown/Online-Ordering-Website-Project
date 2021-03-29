<?php

$FirstName = "";
$LastName = "";
$email = "";
$address = "";
$phone = "";
$price = "";

 if (isset($_POST["7"])) {
        $PID = 7;
            require_once("db.php");
            $sql = "delete from bit4444group41.cart";
            $result = $mydb->query($sql);
        
                   
            echo '<script>alert("Cart cleared.")
             </script>';
 }


$id = 0;
        if(isset($_GET['PID'])) $id=$_GET['PID'];
      
        require_once("db.php");
      
        $sql = "";
        if($id==0)
          $sql ="select * from bit4444group41.cart";
        else {
          $sql ="select * from bit4444group41.cart order by PID";
          }
        $result = $mydb->query($sql);
      
        echo "<table>";
        echo "<thead>";
        echo "<th>Cart</th><th>Price</th>";
        echo "</thead>";
        
          while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$row["Pname"]."</td>
                  <td>".$row["Price"]."</td>";
            echo "</tr>";

          $price = $row["Price"];
          }
    
        




$error = false;
$loginOK = null;
if (isset($_POST["submit"])) {
    if (isset($_POST["email"])) $email = $_POST["email"];
    if (isset($_POST["FirstName"])) $FirstName = $_POST["FirstName"];
    if (isset($_POST["LastName"])) $LastName = $_POST["LastName"];
    if (isset($_POST["Address"])) $address = $_POST["Address"];
    if (isset($_POST["phone"])) $phone = $_POST["phone"];
    if (isset($_POST["price"])) $price = $_POST["price"];
    if (empty($email) || empty($FirstName) || empty($LastName) || empty($address) || empty($phone)) {
        $error = false;
    }
    if (!$error){
        require_once("db.php");
        $sql = "insert into bit4444group41.order(FirstName, LastName, Email, Address, Phone, Price) 
        values ('$FirstName', '$LastName', '$email', '$address', '$phone', $price)";
        $result = $mydb->query($sql);

        $sql = "delete from bit4444group41.cart";
            $result = $mydb->query($sql);
            
        if ($result == 1) {
            echo '<script>alert("You have successfully placed an order.... redirecting to order management page.")
            window.location.href = "CustomerOrders.php";
            </script>';
        } 
    }
    else{
        echo '<script>alert("Please complete all fields to register.")
        window.location.href = "Cart.php";
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

    <style>
    table, th, td {
      border: 1px solid black;
    }
    table {
      border-collapse: collapse;
      empty-cells: show;
      display:
    }
    th {
        margin: -20px -20px 21px;
    line-height: 40px;
    font-size: xx-large;
     font-weight: bold;
     color: #555;
     text-align: center;
  text-shadow: 0 1px white;
  background: #f3f3f3;
  border-bottom: 1px solid #cfcfcf;
  border-radius: 3px 3px 0 0;
  background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
  background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
  -webkit-box-shadow: 0 1px whitesmoke;
  box-shadow: 0 1px whitesmoke;
    }
    td {
        margin: -20px -20px 21px;
  line-height: 40px;
  font-size: xx-large;
  font-weight: bold;
  color: #555;
  text-align: center;
  text-shadow: 0 1px white;
  background: #f3f3f3;
  border-bottom: 1px solid #cfcfcf;
  border-radius: 3px 3px 0 0;
  background-image: -webkit-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -moz-linear-gradient(top, whiteffd, #eef2f5);
  background-image: -o-linear-gradient(top, whiteffd, #eef2f5);
  background-image: linear-gradient(to bottom, whiteffd, #eef2f5);
  -webkit-box-shadow: 0 1px whitesmoke;
  box-shadow: 0 1px whitesmoke;
    }
  </style>

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
                      <li><a href="ModifyCustomer.php">Account Settings</a></li>
                      <li><a href="EmpLogIn.php">Employee</a></li>
                    </ul>
                </li>
            </ul>  
        </div>
        <h1>Order Online</h1>
  </label><br />
  </div>
 
  <form method="post"action="<?php echo $_SERVER['PHP_SELF']?>">
    <label>Customer First Name:
      <input type="text" name=" FirstName" placeholder = "First Name" value = "<?php echo $FirstName; ?>" size="20"  autofocus>
    </label><br />
    <label>Customer Last Name:
      <input type="text" name=" LastName" placeholder = "Last Name"  value = "<?php echo $LastName; ?>" size="20" >
    </label><br />
    <label>Email:
      <input type="text" placeholder="name@domain.com" value = "<?php echo $email; ?>">
    </label><br />
    <label>Address:
      <input type="text" placeholder="Street Name, City, State, Zip code" value = "<?php echo $address; ?>">
    </label><br />
    <label>Phone Number
      <input type="text" name="phone" placeholder = " (XXX-XXX-XXXX)"; value = "<?php echo $phone; ?>">
    </label> <br />
    
      <p>
      <input type="Submit" name = "submit" value="Order!">   <input type="submit" name="7" value="Clear Cart">
  </p>
  </form>
</body>
</html>

        