<?php
$error = false;
$rate = "";
$review = "";
$pname = "";

if (isset($_POST["submit"])) {
    if (isset($_POST["review"])) $review = $_POST["review"];
    if (isset($_POST["rate"])) $rate = $_POST["rate"];
    if (isset($_POST["productname"])) $pname = $_POST["productname"];
    if (empty($review) || empty($rate) || empty($pname)) {
        $error = false;
    }
    if (!$error){
        require_once("db.php");
        $sql = "update bit4444group41.product SET rating = '$rate', review = '$review' where Pname = '$pname'"; 
        $result = $mydb->query($sql);

        if ($result == 1) {
            echo '<script>alert("Your review was successfully submitted.")
            window.location.href = "Review.php";
            </script>';
        } 
    }
    else{
        echo '<script>alert("Please complete both fields to submit a review.")
        window.location.href = "review.php";
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

.review {
  text-align: center;
}


.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: "\2605";
}
.rate > input:checked ~ label {
    color: #ffc700;
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
} 

.bar {
          fill: steelblue;
        }
        
        .bar:hover {
          fill: brown;
        }
        
        .axis--x path {
          display: none;
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
                      <li><a href="EmpLogIn.php">Employee</a></li>
                    </ul>
                </li>
            </ul>  
    </div>

 <h1>Add a Review</h1>
  <br>
  <form class="review" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
  <p> Select product to review </p>
  <select name="productname" id="productdropdown">
      <?php
        require_once("db.php");
        $sql = "select Pname from bit4444group41.product order by PID";
        $result = $mydb->query($sql);
        while($row=mysqli_fetch_array($result)){
          echo "<option value='".$row["Pname"]."'>".$row["Pname"]."</option>";
        }
      ?>
  </select>
  <p>
    <label>
      <p>Review:</p>
      <input type = "text" id="review" name="review" value = "<?php echo $review; ?>" rows="4" cols="50" >
    </label>
  </p>

<div class="rate">
   <input type="radio" id="star5" name="rate" value="<?php echo $star = 5; ?>">
   <label for="star5" title="text"></label>
   <input type="radio" id="star4" name="rate" value="<?php echo $star = 4; ?>" />
   <label for="star4" title="text"></label>
   <input type="radio" id="star3" name="rate" value="<?php echo $star = 3; ?>" />
   <label for="star3" title="text"></label>
   <input type="radio" id="star2" name="rate" value="<?php echo $star = 2; ?>" />
   <label for="star2" title="text"></label>
   <input type="radio" id="star1" name="rate" value="<?php echo $star = 1; ?>" />
   <label for="star1" title="text"></label>

       <p>
      <input type="submit" name = "submit" value="Add Review">
    </p>
 </div>

</form>


<script>
    var clickCount1 =1;
    $(function(){
    $("#ratinganalysis").click(function(){
      if(clickCount1 % 2 ==1) { $.ajax({ url:"review_analysis.php", async:true, success: function(result){ $("#contentArea2").html(result); }})} 
      else { $("#contentArea2").html(""); }
      clickCount1++;});})
  </script>
  
  <button class="lightblue" id="ratinganalysis">View Product Rating analysis</button> <!-- Light Blue -->
  
  <div id="contentArea2"></div>
</body>
</html>