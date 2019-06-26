<?php
foreach ($articles as $article) { ?>
<div class="col-md-3 text-left">
    <div class="col-md-3 text-center">
        <img src="<?php echo $article->image; ?>" width="150px" height="150px">
        <br>
        <?php echo $article->name; ?>
        <br>
        <strong>$<?php echo $article->price; ?></strong>
        <br>
        <button class="btn btn-danger my-cart-btn" data-id="<?php echo $article->id; ?>" data-name="<?php echo $article->name; ?>" data-summary="summary 1" data-price="<?php echo $article->price; ?>" data-quantity="1" data-image="<?php echo $article->image; ?>">Add to Cart</button>
    </div>
</div>
<?php } ?>



