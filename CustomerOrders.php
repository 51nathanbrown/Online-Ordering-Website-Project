<?php
if (isset($_POST["submit"])) {
    require_once("db.php");
    $sql = "delete from bit4444group41.order";
    $result = $mydb->query($sql);
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

  <script src="jquery-3.1.1.min.js"></script>
  <script>
    //ajex in Javascript
		var asyncRequest;

		function stateChange() {
			if(asyncRequest.readyState==4 && asyncRequest.status==200) {
				document.getElementById("contentArea").innerHTML=
					asyncRequest.responseText;
			}
		}

    function clearPage(){
      document.getElementById("contentArea").innerHTML = "";
    }

    //ajax in jQuery
    $(function(){
      $("#orderdropdown").change(function(){
        $.ajax({
          url:"displayOrders.php?OID=" + $("#orderdropdown").val(),
          async:true,
          success: function(result){
            $("#contentArea").html(result);
          }
        })
      })
    })
	</script>
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

<div id = "orderdiv">
<label> Choose an Order: &nbsp;&nbsp;
  <form  method = "post" action = "CustomerOrders.php">
    <select name="orderid" id="orderdropdown">
        <option value="" disabled selected>-</option>
      <?php
        require_once("db.php");
        $sql = "select OID from bit4444group41.order order by OID";
        $result = $mydb->query($sql);
        while($row=mysqli_fetch_array($result)){
          echo "<option value='".$row["OID"]."'>".$row["OID"]."</option>";
        }
      ?>
    </select>
      </form>
  </label><br />
  </div>
  <div id="contentArea">&nbsp;
  </div>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
  <p class="submit"><input type="submit" name="submit" value="Delete order">
      </form>

      <form action="modifyorder.php" method="get">
    <input type="submit" value="Modify Order" 
         name="modify" id="frm1_submit" />
</form>
</body>
</html>