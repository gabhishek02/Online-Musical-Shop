<?php

include 'index.php'
?>


<!DOCTYPE html>

<html>

<head>

	<title>Online Music Shop</title>

	<link rel="stylesheet" type="text/css" href="css/Shopping.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    
<div class="container">

	<h1>
        Online Musical Shop
    </h1>

	<div class="cart">

		<div class="products">

			<div class="product">

				<img src="1.jfif">

				<div class="product-info">

					<h3 class="product-name">Shehnai</h3>

					<h4 class="product-price">Price: ₹ 990</h4>

					<h4 class="product-offer">30%</h4>

					<p class="product-quantity">Qnt: <input value="1" name="1">

				</div>

			</div>

			<div class="product">

				<img src="tabla.jfif">

				<div class="product-info">

					<h3 class="product-name">Tabla</h3>

					<h4 class="product-price"> Price: ₹ 7999</h4>

					<h4 class="product-offer">50%</h4>

					<p class="product-quantity">Qnt: <input value="1" name="">

				</div>

			</div>
            
            <div class="product">

				<img src="Harmonium.jfif">

				<div class="product-info">

					<h3 class="product-name">Harmonium</h3>

					<h4 class="product-price">Price: ₹ 11,999</h4>

					<h4 class="product-offer">37%</h4>

					<p class="product-quantity">Qnt: <input value="1" name="">

				</div>

			</div>
            
            <div class="product">

				<img src="Guitar.jpg">

				<div class="product-info">

					<h3 class="product-name">Guitar</h3>

					<h4 class="product-price">Price: ₹ 6,990</h4>

					<h4 class="product-offer"></h4>

					<p class="product-quantity">Qnt: <input value="1" name="">

				</div>

			</div>

		</div>

		<div class="cart-total">

			<p>

				<span>Total Price</span>

				<span>₹ 27,978</span>

			</p>

			<p>

				<span>Number of Items</span>

				<span>4</span>

			</p>

			<p>

				<span>You Save</span>

				<span>₹ 8,699</span>

			</p>

			<a href="customer.php">Proceed to Checkout</a>

		</div>

	</div>

</div>



</body>


</html>