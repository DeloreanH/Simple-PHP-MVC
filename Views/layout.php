<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css"/>
</head>

<body>

<nav class="navbar">
    <div class="container">
        <a class="navbar-brand" href="#">Your online store</a>
        <div class="navbar-right">
                <span style="margin-top: 10px" class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
        </div>
    </div>
</nav>

<div class="container text-center">

    <?php require_once('routes.php'); ?>

</div>

<!-- The popover content -->

<div id="popover" style="display: none">
    <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
    <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
</div>

<!-- JavaScript includes -->

<script src="assets/js/jquery-2.2.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/customjs.js"></script>
<script src="assets/js/jquery.mycart.js"></script>

<script type="text/javascript">
    $(function () {

        var goToCartIcon = function($addTocartBtn){
            var $cartIcon = $(".my-cart-icon");
            var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
            $addTocartBtn.prepend($image);
            var position = $cartIcon.position();
            $image.animate({
                top: position.top,
                left: position.left
            }, 500 , "linear", function() {
                $image.remove();
            });
        }

        $('.my-cart-btn').myCart({
            classCartIcon: 'my-cart-icon',
            classCartBadge: 'my-cart-badge',
            affixCartIcon: true,
            checkoutCart: function(products, totalPrice, totalQuantity) {
                $.ajax({
                    url : 'Controllers/InvoiceController.php?action=store/',
                    type : 'POST',
                    data : {
                        'total' : totalPrice
                    },
                    dataType:'json',
                    success : function(data) {
                        alert('Data: '+data);
                    },
                    error : function(request,error)
                    {
                        alert("ERROR!");
                    }
                });
            },
            clickOnAddToCart: function($addTocart){
                goToCartIcon($addTocart);

            },
        });

    });
</script>

</body>
</html>
