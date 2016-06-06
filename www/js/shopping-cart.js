cartArray = [];
jQuery(document).ready(function(){
    initShoppingCart();
});
function initShoppingCart(){
    if(typeof(Cookies.get("iv_shopping-cart")) != "undefined")
    {
        var cookie_data = JSON.parse(Cookies.get("iv_shopping-cart"));
        if(cookie_data.length > 0)
        {
            cartArray = cookie_data;
            addRemoveEventListeners();
        }
    }

}
function addRemoveEventListeners()
{
    jQuery(".remove-item").click(function(){
        var productID = jQuery(this).parent().parent().data("product-id");
        updateCart(-1,1,productID);
    });
    jQuery(".remove-checkout-item").click(function(){
        var productID = jQuery(this).parent().parent().data("product-id");
        var val = updateCart(-1,1,productID);
        updateCheckout(productID, val);
    });
}

jQuery(".addToCartBtn").click(function(){
    var name = jQuery(this).parent().parent().parent().parent().data("name");
    var price = jQuery(this).parent().parent().parent().parent().data("price");
    var productID = jQuery(this).parent().parent().parent().parent().data("product-id");
    var img = jQuery(this).parent().parent().parent().parent().data("img");
    addProduct(name,price,img,productID);
});

var $eC = jQuery("#empty-cart");
var $eCO = jQuery("#empty-checkout");
(function($) {

    var $shopBtn = $('.shop-toggle');
    var $addItem = $('.addToCartBtn');
    var $removeItem = $('.remove-item');
    var $removeChekoutItem = $('.remove-checkout-item');
    /*$removeChekoutItem.click(function(e){
        $shopBtn.dropdown("toggle");
    });*/
    $addItem.click(function(e){
        $shopBtn.dropdown("toggle");
    });

    $('.dropdown.keep-open').on({
        "shown.bs.dropdown": function() { this.closable = false; },
        "click":             function() { this.closable = false; },
        "hide.bs.dropdown":  function() { return this.closable; }
    });

    //Fix to reassure that shopping cart stays open until it gets blurred.
    $(document).mouseup(function (e)
    {
        var container = $(".dropdown.keep-open");

        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0 && !$addItem.is(e.target) && !$removeItem.is(e.target) && !$removeChekoutItem.is(e.target)) // ... nor a descendant of the container
        {
            container.removeClass("open");
        }
    });


})( jQuery );
var cartItem = function cartItem(name, price, img, productID)
{
    var self = this;
    self.name = name;
    self.price = price;
    self.img = img;
    self.productID = productID;
}
var $sCL =  jQuery('#shopping-cart-list');

function bake_cookie(name, value) {
    var cookie = [name, '=', JSON.stringify(value), '; domain=.', window.location.host.toString(), '; path=/;'].join('');
    document.cookie = cookie;
}
function setCookie (name, value, expires, path, domain, secure) {
    var curCookie = name + "=" + encodeURIComponent(JSON.stringify(value)) + (expires ? "; expires=" + expires.toGMTString() : "") + (path ? "; path=" + path : "") + (domain ? "; domain=" + domain : "") + (secure ? "secure" : "");
    document.cookie = curCookie;
}
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}
function insertProduct(name, price, img, productID)
{
    if(price == "")
        price = "0";

    var htmlCode = "<li class='cart-item' data-product-id='" + productID + "'> \
			<div class='cart-item-left-container'> \
			<img alt='60x60' style='width: 60px; height: 60px;' src='" + img + "'> \
			</div> \
			<div class='cart-item-right-container'> \
			<div class='cart-product' data-name='" + name + "'>" + name + "</div> \
			<span class='remove pull-right remove-item'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></span> \
			<span class='cart-item-price'> <span class='cart-item-quantity'>1</span> x " + price + " SEK</span> \
			</div> \
			</li>";
    //console.log($sCL.children().length);
    if(cartArray.length == 0)
        $eC.show();
    else
        $eC.hide();

    $sCL.append(htmlCode);

    addRemoveEventListeners();
}
function updateCheckout(productID, val)
{
    jQuery.each(jQuery('li.checkout-item'), function(key, product){
        if(jQuery(product).data("product-id") == productID)
        {
            jQuery(product).find(".checkout-item-quantity").html(function(i, oldval) {
                for(var i = 0; i < cartArray.length; i++)
                {
                    if(cartArray[i][1].productID == productID)
                    {
                        if(cartArray[i][0] > 0) // add product
                        {
                            //console.log(oldval);
                            return cartArray[i][0];
                        }
                        else if(val == undefined)
                        {
                            jQuery(product).remove();
                            return 0;
                        }
                        else
                            return 0;
                    }
                }
                console.log(val);
                if(val == undefined)
                {
                    jQuery(product).remove();
                    return 0;
                }
            });
        }
    });

    if(cartArray.length == 0)
        $eCO.show();
    else
        $eCO.hide();
}
function updateCart(action, ammount, productID)
{
    jQuery.each(jQuery('li.cart-item'), function(key, product){
        //console.log(jQuery(product).data("product-id"));

        if(jQuery(product).data("product-id") == productID)
        {
            jQuery(product).find(".cart-item-quantity").html(function(i, oldval) {
                if(action == 1) // add product
                {
                    //console.log(oldval);
                    return ammount;
                }
                else if(action == -1) // remove product
                {

                    return removeProduct(productID, product);
                    //return cartArray[key][0];
                }
            });
        }
    });
    updateCartTot();
    updateCartCount();

    Cookies.set("iv_shopping-cart", cartArray, { expires: 7 });
    if(cartArray.length == 0)
        $eC.show();
    else
        $eC.hide();
}
function updateCartTot()
{

    var tot = 0;
    for(var i = 0; i < cartArray.length; i++)
    {
        tot += cartArray[i][0] * cartArray[i][1].price;
    }

    jQuery(".cart-total").html("Totalt: " + tot + " SEK");


}
function updateCartCount()
{
    var cartCount = 0;
    for(var i = 0; i < cartArray.length; i++)
    {
        cartCount += cartArray[i][0];
    }
    jQuery(".cart-item-count").html(cartCount);
}
function removeProduct(productID, product)
{
    for(var i = 0; i < cartArray.length; i++)
    {
        if(cartArray[i][1].productID == productID)
        {
            cartArray[i][0]--;
            if(cartArray[i][0] > 0)
            {
                return cartArray[i][0];
            }
            else
            {
                jQuery(product).remove();
                cartArray.splice(i,1);
                return 0;
            }
        }
    }
    return 0;
}
function addProduct(name, price, img, productID){

    if(cartArray.length > 0)
    {
        for(var i = 0; i < cartArray.length; i++)
        {
            if(cartArray[i][1].productID == productID)
            {
                cartArray[i][0]++;
                updateCart(1, cartArray[i][0], productID)
                return;
            }
        }
        cartArray.push([1, new cartItem(name, price, img, productID)]);
        insertProduct(name, price, img, productID);
        updateCartTot();
        updateCartCount();

    }
    else
    {
        cartArray.push([1, new cartItem(name, price, img, productID)]);
        insertProduct(name, price, img, productID);
        updateCartTot();
        updateCartCount();
    }
    Cookies.set("iv_shopping-cart",cartArray, { expires: 7 });
}
