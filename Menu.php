<?php
$pname = "";
$price = "";
$PID = "";

$error = false;
$loginOK = null;

if (isset($_POST["product1"])) {
    $PID = 1;
        require_once("db.php");
        $sql = "select PID, Pname, Price from bit4444group41.product where PID = '$PID'";
        $result = $mydb->query($sql);
        $row = mysqli_fetch_array($result);
        
        $pname = $row["Pname"];
        $price = $row["Price"];
        $sql = "insert into bit4444group41.cart(PID, Pname, Price) values ('$PID', '$pname', '$price')";
        $result = $mydb->query($sql);
               
        echo '<script>alert("Item added to cart.")
         </script>';
}
if (isset($_POST["product2"])) {
    $PID = 2;
        require_once("db.php");
        $sql = "select PID, Pname, Price from bit4444group41.product where PID = '$PID'";
        $result = $mydb->query($sql);
        $row = mysqli_fetch_array($result);
        
        $pname = $row["Pname"];
        $price = $row["Price"];
        $sql = "insert into bit4444group41.cart(PID, Pname, Price) values ('$PID', '$pname', '$price')";
        $result = $mydb->query($sql);
               
        echo '<script>alert("Item added to cart.")
         </script>';
}
if (isset($_POST["product3"])) {
    $PID = 3;
        require_once("db.php");
        $sql = "select PID, Pname, Price from bit4444group41.product where PID = '$PID'";
        $result = $mydb->query($sql);
        $row = mysqli_fetch_array($result);
        
        $pname = $row["Pname"];
        $price = $row["Price"];
        $sql = "insert into bit4444group41.cart(PID, Pname, Price) values ('$PID', '$pname', '$price')";
        $result = $mydb->query($sql);
               
        echo '<script>alert("Item added to cart.")
         </script>';
}
if (isset($_POST["product4"])) {
    $PID =4;
        require_once("db.php");
        $sql = "select PID, Pname, Price from bit4444group41.product where PID = '$PID'";
        $result = $mydb->query($sql);
        $row = mysqli_fetch_array($result);
        
        $pname = $row["Pname"];
        $price = $row["Price"];
        $sql = "insert into bit4444group41.cart(PID, Pname, Price) values ('$PID', '$pname', '$price')";
        $result = $mydb->query($sql);
               
        echo '<script>alert("Item added to cart.")
         </script>';
}
if (isset($_POST["product5"])) {
    $PID = 5;
        require_once("db.php");
        $sql = "select PID, Pname, Price from bit4444group41.product where PID = '$PID'";
        $result = $mydb->query($sql);
        $row = mysqli_fetch_array($result);
        
        $pname = $row["Pname"];
        $price = $row["Price"];
        $sql = "insert into bit4444group41.cart(PID, Pname, Price) values ('$PID', '$pname', '$price')";
        $result = $mydb->query($sql);
               
        echo '<script>alert("Item added to cart.")
         </script>';
}
if (isset($_POST["product6"])) {
    $PID = 6;
        require_once("db.php");
        $sql = "select PID, Pname, Price from bit4444group41.product where PID = '$PID'";
        $result = $mydb->query($sql);
        $row = mysqli_fetch_array($result);
        
        $pname = $row["Pname"];
        $price = $row["Price"];
        $sql = "insert into bit4444group41.cart(PID, Pname, Price) values ('$PID', '$pname', '$price')";
        $result = $mydb->query($sql);
               
        echo '<script>alert("Item added to cart.")
         </script>';
}
if (isset($_POST["product7"])) {
    $PID = 7;
        require_once("db.php");
        $sql = "select PID, Pname, Price from bit4444group41.product where PID = '$PID'";
        $result = $mydb->query($sql);
        $row = mysqli_fetch_array($result);
        
        $pname = $row["Pname"];
        $price = $row["Price"];
        $sql = "insert into bit4444group41.cart(PID, Pname, Price) values ('$PID', '$pname', '$price')";
        $result = $mydb->query($sql);
               
        echo '<script>alert("Item added to cart.")
         </script>';
}
if (isset($_POST["product8"])) {
    $PID = 8;
        require_once("db.php");
        $sql = "select PID, Pname, Price from bit4444group41.product where PID = '$PID'";
        $result = $mydb->query($sql);
        $row = mysqli_fetch_array($result);
        
        $pname = $row["Pname"];
        $price = $row["Price"];
        $sql = "insert into bit4444group41.cart(PID, Pname, Price) values ('$PID', '$pname', '$price')";
        $result = $mydb->query($sql);
               
        echo '<script>alert("Item added to cart.")
         </script>';
}
if (isset($_POST["product9"])) {
    $PID = 9;
        require_once("db.php");
        $sql = "select PID, Pname, Price from bit4444group41.product where PID = '$PID'";
        $result = $mydb->query($sql);
        $row = mysqli_fetch_array($result);
        
        $pname = $row["Pname"];
        $price = $row["Price"];
        $sql = "insert into bit4444group41.cart(PID, Pname, Price) values ('$PID', '$pname', '$price')";
        $result = $mydb->query($sql);
               
        echo '<script>alert("Item added to cart.")
         </script>';
}
if (isset($_POST["product10"])) {
    $PID = 10;
        require_once("db.php");
        $sql = "select PID, Pname, Price from bit4444group41.product where PID = '$PID'";
        $result = $mydb->query($sql);
        $row = mysqli_fetch_array($result);
        
        $pname = $row["Pname"];
        $price = $row["Price"];
        $sql = "insert into bit4444group41.cart(PID, Pname, Price) values ('$PID', '$pname', '$price')";
        $result = $mydb->query($sql);
               
        echo '<script>alert("Item added to cart.")
         </script>';
}
if (isset($_POST["product11"])) {
    $PID = 11;
        require_once("db.php");
        $sql = "select PID, Pname, Price from bit4444group41.product where PID = '$PID'";
        $result = $mydb->query($sql);
        $row = mysqli_fetch_array($result);
        
        $pname = $row["Pname"];
        $price = $row["Price"];
        $sql = "insert into bit4444group41.cart(PID, Pname, Price) values ('$PID', '$pname', '$price')";
        $result = $mydb->query($sql);
               
        echo '<script>alert("Item added to cart.")
         </script>';
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
                      <li><a href="ModifyCustomer.php">Account Settings</a></li>
                      <li><a href="EmpLogIn.php">Employee</a></li>
                    </ul>
                </li>
            </ul>  
        </div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        

        <div class = "menu">    
        <table border="3" id="food" style="background-color: white;">
            <thead>
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Picture
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Chicken Souvlaki platter
                    <p class="submit"><input type="submit" name="product7" value="Add to Cart">
                    </td>
                    <td>Chicken Souvlaki skewer platter
                        with <br> fresh vegetables, pita bread, and our signature curly fries
                    </td>
                    <td>
                        $11.99
                    </td>
                    <td>
                        <img src="images/chicken.jpg" width=200 height=200 alt="This is a picture of Chicken Souvlaki">
                    </td>
                </tr>
                <tr>
                    <td>Signature Curly Fries
                    <p class="submit"><input type="submit" name="product8" value="Add to Cart">
                    </td>
                    <td> Our large basket of battered and fried in house made curly fries come
                        with a side of your favorite dip
                    </td>
                    <td>
                        $5.99
                    </td>
                    <td>
                        <img src="images/fries.jpg" width=200 height=200 alt="This is a picture of curly fries">
                    </td>
                </tr>
                <tr>
                    <td>Greek Pasta
                    <p class="submit"><input type="submit" name="product9" value="Add to Cart">
                    </td>
                    <td>Greek Pasta with an olive oil and feta cheese marinade<br> with sauteed vegetables
                    </td>
                    <td>
                        $12.99
                    </td>
                    <td>
                        <img src="images/greekpasta.jpg" width=200 height=200 alt="This is a picture of Greek Pasta">
                    </td>
                </tr>
                <tr>
                    <td>Greek Salad
                    <p class="submit"><input type="submit" name="product10" value="Add to Cart">
                    </td>
                    <td>A fresh mix of greeks with authentic greek feta, olives, cucumber <br>topped with
                        croutons and greek dressing 
                    </td>
                    <td>
                        $8.99
                    </td>
                    <td>
                        <img src="images/greeksalad.jpg" width=200 height=200 alt="This is a picture of Greek Salad">
                    </td>
                </tr>
                <tr>
                    <td>Steak Sub
                    <p class="submit"><input type="submit" name="product11" value="Add to Cart">
                    </td>
                    <td> Our toasted italian bread is topped with marinated steak and sauteed veggies.
                        <br> all topped with melted cheese
                    </td>
                    <td>
                        $12.99
                    </td>
                    <td>
                        <img src="images/steaksub.jpg" width=200 height=200 alt="This is a picture of Steak Sub">
                    </td>
                </tr>
            </tbody>
        </table>
        <table border="3" id="drinks" style="background-color: white;">
            <caption>Drinks</caption>
            <thead>
                <tr>
                    <th>
                        Name
                    </th>
        
                    <th>
                        Price
                    </th>
        
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ace Berry Cider
                    <p class="submit"><input type="submit" name="product2" value="Add to Cart">
                    </td>
                    <td>
                        $4.25
                    </td>
                </tr>
                <tr>
                    <td>Allagash Siason
                    <p class="submit"><input type="submit" name="product3" value="Add to Cart">
                    </td>
                    <td>$4.95</td>
                </tr>
                <tr>
                    <td>Warsteiner Lager
                    <p class="submit"><input type="submit" name="product4" value="Add to Cart">
                    </td>
                    <td>$3.50</td>
                </tr>
                <tr>
                    <td>Westmalle Tripel
                    <p class="submit"><input type="submit" name="product5" value="Add to Cart">
                    </td>
                    <td>$8.95</td>
                </tr>
                <tr>
                    <td>Ace Purple Haze
                    <p class="submit"><input type="submit" name="product6" value="Add to Cart">
                    </td>
                    <td>$4.00</td>
                </tr>
                <tr>
                    <td>Ace Pineapple Cider
                    <p class="submit"><input type="submit" name="product1" value="Add to Cart">
                    </td>
                    <td>$4.25</td>
                </tr>
</form>
</body>
</html>