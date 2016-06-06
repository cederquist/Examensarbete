
<nav class="navbar navbar-inverse" role="navigation">
  <div class="container">
  <div>
    <a class="navbar-brand" href="../">Goggles</a>
  </div>
    <div class="btn-group pull-right dropdown keep-open">
      <button type="button" class="dropdown-toggle shop-toggle cart-button" data-toggle="dropdown" aria-expanded="false">
        Kundvagn<!--<span class="badge cart-item-count"><?php echo $SCI[1];?></span>-->
      </button>
      <ul id="shopping-cart" class="dropdown-menu" role="menu">
        <li>
          <ul id="shopping-cart-list" style="padding: 0; margin: 0; display: inline-block; list-style: none; min-height: 80px; max-height: 242px; overflow-y: auto; min-width: 335px;">
            <li id="empty-cart" class ="empty-cart" style="<?php echo $SCI[1] > 0 ? "display: none;" : "";?>">
              <span style="color: #e6e6e6 !important;">T O M</span>
            </li>
            <?php echo $SCI[3]; ?>
          </ul>
        </li>
        <hr style="margin-top: 25px !important; margin-bottom: 10px !important;">
        <li><span class="cart-total product-description">Totalt: <?php echo $SCI[2]; ?> SEK</span>
          <button onclick="window.location = '/checkout.php'" type="button" class="standard-button pull-right">Gå till kassan</button>
        </li>

    </div>
  </div>
</nav>
