<?php
//START THE SESSION
session_start();

//CONFIGURATION
require("config.php");
require("dbcontroller.php");
$n = $_SESSION['u_id'];

//CONNECT TO DB
$pdo = new PDO(
	"mysql:host=$host;dbname=$dbname;charset=$charset", 
	$user, $password, [
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES   => false,
	]
);

//PROCESS REQUESTS
switch ($_POST['request']) {
	case "add":
		//$_SESSION['cart'][PRODUCT ID] = QUANTITY
		if (is_numeric($_SESSION['cart'][$_POST['product_id']])) {
			$_SESSION['cart'][$_POST['product_id']]++;
		} else {
			$_SESSION['cart'][$_POST['product_id']] = 1;
		}
		break;

	case "show":
		//FETCH PRODUCTS FROM PRODUCT TABLE
		$stmt = $pdo->query('SELECT * FROM `product`');
		$products = array();
		while ($row = $stmt->fetch()){
			$products[$row['product_id']] = $row;
		}

		//CART IN HTML
		$sub = 0;
		$total = 0; ?>
		
		<h2>Shopping Cart</h2>
		<div class="HUGEBOX">
		<table class="table table-striped">
			<tr>
				<th>Quantity</th>
				<th>Item</th>
				<th>Price</th>
			</tr>
			<?php
			foreach($_SESSION['cart'] as $id=>$qty) {
				// CALCULATE THE TOTALS
				$sub = $qty * $products[$id]['price'];
				$total += $sub;

				// THE PRODUCT
				printf("<tr><td><input id='qty_%u' onchange='qtyCart(%u);' type='text' value='%u'/></td><td>%s</td><td>$%0.2f</td></tr>",
					$id, $id, $qty,
					$products[$id]['product_name'],
					$sub
				);
			}
			?>
			<tr>
				<td></td>
				<td><strong>Total</strong></td>
				<td><strong>$<?=$total?></strong></td>
			</tr>
		</table>

<?php if($total>0){ ?>
				
<!--PAYMENT-->						
	<div class="row">
	<div class="col-75">
    <div class="container">
	
    <form action="/action_page.php">
      
    <div class="row">
    <div class="col-50">
    <h3 id="header-t">Billing Address</h3>

    <input type="text" id="co_name" name="firstname" placeholder="Full Name">
	<input type="text" id="co_email" name="email" placeholder="Email">
	<input type="text" id="co_add" name="address" placeholder="Address">

			
    <div class="icon-container">
    <i class="fa fa-cc-visa" style="color:navy;"></i>
    <i class="fa fa-cc-amex" style="color:blue;"></i>
    <i class="fa fa-cc-mastercard" style="color:red;"></i>
    <i class="fa fa-cc-discover" style="color:orange;"></i>
    </div>

    </div>
	
	<div class="col-50">
    <h3 id="header-t">Payment</h3>

    <input type="text" id="ccc" name="cardname" placeholder="Name on Card">
    <input type="text" id="ccc" name="cardnumber" placeholder="Credit Card Number">
    <input type="text" id="ccc" name="expmonth" placeholder="Expiry Month">
	
    <div class="row">
	
    <div class="col-50">
    <input type="text" id="ccc" name="expyear" placeholder="Expiry Year">
    </div>
	
    <div class="col-50">
    <input type="text" id="ccc" name="cvv" placeholder="CVV">
    </div>
	
    </div>
    </div>
          
    </div>
	<input type="button" class="btn btn-success" value="Checkout" onclick="cartCheckout();"/>
    </form>
    </div>
	</div>
	</div>
	</div>
		
<?php } ?>
		
<?php
		break;

	case "qty":
		if ($_POST['qty']==0) {
			unset($_SESSION['cart'][$_POST['product_id']]);
		} else {
			$_SESSION['cart'][$_POST['product_id']] = $_POST['qty'];
		}
		break;

	// NO ERROR & SECURITY CHECKS IN THIS SIMPLE EXAMPLE...
	// BEEF UP THIS SECTION IF YOU WANT
	case "checkout":
		// CREATE THE ORDER
		$sql = sprintf("INSERT INTO `orders` (`order_name`, `cus_id`, `order_email`, `order_address`) VALUES ('%s', '%d', '%s', '%s')", 
			$_POST['name'], $n, $_POST['email'], $_POST['address']
		);
		$pdo->exec($sql);
		$last_id = $pdo->lastInsertId();

		// INSERT THE ITEMS
		$sql = "INSERT INTO `orders_items` (`order_id`, `product_id`, `cus_id`, `quantity`) VALUES ";
		foreach ($_SESSION['cart'] as $id=>$qty) {
			$sql .= sprintf("(%u,%u,%u,%u),", $last_id, $id, $n, $qty);
		}
		$sql = substr($sql,0,-1);	// STRIP LAST COMMA
		$sql .= ";";
		$pdo->exec($sql);

		// CLEAR OUT THE CURRENT CART
		$_SESSION['cart'] = array();
		break;
}
?>