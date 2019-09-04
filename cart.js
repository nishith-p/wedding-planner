function addToCart(id){
// addToCart() : add an item to the cart
// PARAM id : product id

	$.ajax({
		url: "ajax-cart.php",
		method: "POST",
		data: { 
			product_id:id,
			request:"add"
		}
	}).done(function() {
		alert("Product has been successfully added to the cart.");
		setTimeout(hideMessage, 2000);
	});
}

function toggleCart(){
// toggleCart() : show/hide the cart

	var cart = $('#cart'),
		products = $('#products');

		$.ajax({
			url: "ajax-cart.php",
			method: "POST",
			dataType: "html",
			data: { 
				request:"show"
			}
		}).done(function(res) {
			products.hide();
			cart.html(res).show();
		});
}

function qtyCart(id){
// qtyCart() : change product quantity
// PARAM id : product id

	var qty = parseInt($('#qty_'+id).val());
	if ($.isNumeric(qty)) {
		$.ajax({
			url: "ajax-cart.php",
			method: "POST",
			data: { 
				request:"qty",
				product_id:id,
				qty:qty
			}
		}).done(function(res) {
			$('#alert').html("Quantity changed").show();
			setTimeout(hideMessage, 2000);
			$('#cart').hide();
			toggleCart();
		});
	} else {
		alert("Please enter a valid number");
	}
}


function cartCheckout(){
	// GET CUSTOMER DETAILS
	var name = $('#co_name').val(),
	    email = $('#co_email').val(),
		address = $('#co_add').val(),
		err = "";

	// FORM CHECK
	if (name=="") { err += "Please enter your name\n"; }
	if (email=="") { err += "Please enter your email\n"; }
	if (address=="") { err += "Please enter your address\n"; }
	if (err=="") {
		$.ajax({
			url: "ajax-cart.php",
			method: "POST",
			data: { 
				request : "checkout",
				name : name,
				email : email,
				address : address
			}
		}).done(function(res) {
			$('#cart').html("Thank you! Your order is been processed.");
		});
	} else {
		alert(err);
	}
}