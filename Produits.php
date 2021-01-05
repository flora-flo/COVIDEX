<?php require "Header.php"; ?>
<?php 
	include "Admin/DB/Config.php";
	include "Admin/Controller/ProduitCore.php";

	$produitC = new ProduitCore();

	$liste = $produitC->getAllProduits();
?>
<div class="products_wrapper isotope_wrapper">
	<ul class="products grid">
		<?php foreach ($liste as $row) { ?> 
			 <li class="isotope-item product type-product post-57 status-publish first instock product_cat-credistae has-post-thumbnail shipping-taxable purchasable product-type-simple">
                <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');" >
                    <div class="image_wrapper">
                        <a href="DetailsProduit.php?id=<?=$row->id?>">
                            <div class="mask"></div>
                            <img width="600" height="600" src="<?="Admin/Images/".$row->photo?>" class="scale-with-grid wp-post-image" alt />
                        </a>
                        <div class="image_links">
                            <a rel="nofollow" href="Admin/Controller/AddToCart.php?id=<?=$row->id?>" data-quantity="1" data-product_id="57"  class="add_to_cart_button ajax_add_to_cart poduct_type_simple" ><i class="icon-basket"></i>
                            </a>
                        </div>
                  	</div>
                </div>
                <div class="desc">
                    <h4><a href="DetailsProduit.php?id=<?=$row->id?>"><?=$row->titre?></a></h4>
                    <span class="price">
                    	<span class="woocommerce-Price-amount amount">
                    		
                            <?php if($row->remise != NULL ) { ?>
                                <span style="color:red;"><?=$row->prix?></span> <?=$row->prix-$row->remise?>
                            <?php } else { ?>
                                <?=$row->prix?>
                            <?php } ?>
                            <span class="woocommerce-Price-currencySymbol">&#36;</span>
                    	</span>
                    </span>
               	</div>
            </li>
		<?php } ?>                   
    </ul>
</div>



<?php require "Footer.php"; ?>
