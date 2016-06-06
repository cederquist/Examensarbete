<?php
function getShoppingCartInfo()
	{
		if(isset($_COOKIE['iv_shopping-cart']) && !empty($_COOKIE['iv_shopping-cart']))
		{
			$cartArray = json_decode(stripslashes($_COOKIE['iv_shopping-cart']));
			$cartHTML = "";
			$productTot = 0;
			$priceTot = 0;
			foreach($cartArray as $key => $product)
			{


				$productCount = $product[0];

				$name = $product[1]->name;
				$price = $product[1]->price;
				$img = $product[1]->img;
				$productID = $product[1]->productID;

				$priceTot += $productCount * $price;
				$productTot += $productCount;
				$cartHTML .= "<li class='cart-item' data-product-id='$productID'>
					<div class='cart-item-left-container'>
					<img alt='60x60' style='width: 60px; height: 60px;' src='$img'>
					</div>
					<div class='cart-item-right-container'>
					<div class='cart-product' data-name='$name'>$name</div>
					<span class='remove pull-right remove-item'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></span>
					<span class='cart-item-price'> <span class='cart-item-quantity'>$productCount</span> x $price SEK</span>
					</div>
					</li>";
			}
			return array($cartArray,$productTot,$priceTot,$cartHTML);
		}
		else
			return array(null,0,0,"");
	}
	function generateCheckoutItems()
	{
		if(isset($_COOKIE['iv_shopping-cart']) && !empty($_COOKIE['iv_shopping-cart']))
		{
			$cartArray = json_decode(stripslashes($_COOKIE['iv_shopping-cart']));
			$checkoutHTML = "";
			$productTot = 0;
			$priceTot = 0;
			foreach($cartArray as $key => $product)
			{

				$productCount = $product[0];

				$name = $product[1]->name;
				$price = $product[1]->price;
				$img = $product[1]->img;
				$productID = $product[1]->productID;

				$priceTot += $productCount * $price;
				$productTot += $productCount;

				$checkoutHTML .="<li class='checkout-item' data-product-id='$productID'>
									<div class='item-left'>
										<img src='$img' style='width: 100px; height: 100px;'>
									</div>
									<div class='item-middle'>
										<div class='cart-product' data-name='$name'>$name</div>
										<span class='cart-item-price'> <span class='checkout-item-quantity'>$productCount</span> x $price SEK</span>
									</div>
									<div class='item-right'>
										<span class='remove remove-checkout-item'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></span>
									</div>
								</li>";
			}
			return $checkoutHTML;
		}
		else
		{
			return "";
		}
	}

?>
