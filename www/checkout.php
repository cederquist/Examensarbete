<?php
require_once("functions.php");
$SCI = getShoppingCartInfo();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Goggles</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <link href="css/shop.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <?php require_once('nav.php'); ?>

    <!-- Page Content -->
    <div class="container">
        <div id="checkout-page" class="container-fluid">
            <div class="row">

                <div style="margin: 2em 0;" class="panel panel-default">
                    <div style="background-color:#FCFEF9;" class="panel-heading">Din beställning:</div>
                    <div class="panel-body">
                        <ul id="shopping-cart-list" style=" margin: 0; list-style: none; width: 100%; font-size: 15pt;">
                            <li id="empty-checkout" class="empty-checkout" style="<?php echo $SCI[1] > 0 ? "display: none" : "";?>">
                                <h3>Inga varor. Din beställning är tom.</h3>
                            </li>
                            <?php echo generateCheckoutItems(); ?>
                        </ul>
                        <ul style="margin: 0.5em 0; list-style: none; width: 100%; font-size: 15pt;">
                            <li class="divider"></li>
                        </ul>
                        <h3 class="margin-reset cart-total">Totalt: <?php echo $SCI[2]?> SEK</h3>
                    </div>
                </div>
                <div style="margin: 2em 0;" class="panel panel-default">
                    <div style="background-color:#FCFEF9;" class="panel-heading">Personuppgifter:</div>
                    <div class="panel-body">
                        <form id="checkoutForm" method="post" action="" class="form-horizontal">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">För och efternamn *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">E-mail *</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTel" class="col-sm-2 control-label">Telefon *</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" name="inputTel" id="inputTel" placeholder="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress" class="col-sm-2 control-label">Adress *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputAddress" id="inputAddress" placeholder="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputZip" class="col-sm-2 control-label">Postnummer *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputZip" id="inputZip" placeholder="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCity" class="col-sm-2 control-label">Ort *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputCity" id="inputCity" placeholder="" >
                                    <span style="font-size: 90%; color: #CCC; display: block; float:right;">* betyder att fältet är obligatoriskt.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input name="inputOrder" type="checkbox" value="1" checked> Jag vill ha en orderbekräftelse via mail.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input name="formSubmit" id="submitForm" value="Skicka beställning!" type="submit" class="standard-button">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2015 Gogglish Inc.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/shopping-cart.js"></script>
    <script type="text/javascript" src="js/jquery.validator.min.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>


</body>

</html>
