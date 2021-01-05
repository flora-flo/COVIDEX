<?php require "Header.php"; ?>
<?php 
	include "Admin/DB/Config.php";
	include "Admin/Controller/ProduitCore.php";

	$produitC = new ProduitCore();

	$liste = $produitC->getProduitById($_GET['id']);
	foreach($liste as $row) {}
?>

<div class="product_wrapper clearfix">
    <div class="column one-second product_image_wrapper">
        <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="transition: opacity .25s ease-in-out;">
            <figure class="woocommerce-product-gallery__wrapper">
                <div data-thumb="images/med-product-5-300x300.jpg" data-thumb-alt class="woocommerce-product-gallery__image">
                    <a href="images/med-product-5.jpg"><img width="600" height="600" src="<?="Admin/Images/".$row->photo?>" class="wp-post-image" alt title="med-product-5" data-caption data-src="" data-large_image="images/med-product-5.jpg" data-large_image_width="1000" data-large_image_height="1000" ></a>
                </div>
            </figure>
        </div>
    </div>
                                            
	<div class="summary entry-summary column one-second">
        <h1 class="product_title entry-title"><?=$row->titre?></h1>
       	<p class="price">
            <span class="woocommerce-Price-amount amount">
            	<span class="woocommerce-Price-currencySymbol">&#36;</span><?=$row->prix?>
            </span>
        </p>
        <div class="woocommerce-product-details__short-description">
            <p><?=$row->description?></p>
        </div>
        <div class="product_meta">
            <span class="posted_in">Categorie: </span><?=$row->categorie?>
        </div>
    </div>
</div>

<?php require "Footer.php"; ?>
