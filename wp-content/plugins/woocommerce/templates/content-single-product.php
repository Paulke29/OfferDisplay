<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>
	
	 <div class = "ExtendWarrantyOffer" >
		<div style="display: block;">
			<h3>Here is the Extend Warranty </h2>
			<!-- <script src="https://sdk.helloextend.com/extend-sdk-client/v1/extend-sdk-client.min.js"></script> -->
			<!-- <script>Extend.config({storeId: '83d57b1a-4674-46d2-8831-373680d5637d'})</script> -->
			<script src="https://sdk.helloextend.com/extend-sdk-client/v1/demo/extend-sdk-client.min.js"></script>
			<!-- <script>Extend.config({storeId: '83d57b1a-4674-46d2-8831-373680d5637d'})</script> -->
			<div class= "extend-offer" id="extend-offer"></div>
			<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
			<!-- <script src="js/scripts.js"></script> -->
			<script >
			   Extend.config({storeId: '83d57b1a-4674-46d2-8831-373680d5637d'})
			   var IDnumber = document.getElementById("product-<?php the_ID(); ?>").id
			//    var IdReference;
			   console.log("ID:",IDnumber)
			   switch(IDnumber){
				   case "product-21":
				       IdReference = '1654385435';
					   break;
				//  break;
					case "product-23":
					IdReference = '64158476984685';
					break;
				//  break;
			    }
				console.log("Reference:",IdReference)
			   $(document).ready(function(){
						Extend.buttons.render('#extend-offer',{
						referenceId:IdReference
					})
				   $("button").click(function(e){
					console.log("Hello World")
					// e.preventDefault()

						/** get the component instance rendered previously */
						const component = Extend.buttons.instance('#extend-offer')
						// console.log("Component: "+component);
						/** get the users plan selection */
						const plan = component.getPlanSelection()
						// console.log("Plan: "+plan)
						const product = component.getActiveProduct()
						console.log("Hello Plan: "+JSON.stringify(plan));
						if(plan){
							console.log("Hello Plan 2")
							$price = plan.price;
							<?php echo ($product->get_price()); ?>
							e.preventDefault()

						}
						else{
							Extend.modal.open({
									referenceId:IdReference,
							})
							console.log("PPPPP")
							e.preventDefault()
						}
					})
					
				})
			</script>
			<?php 
			  if(has_filter("woocommerce_product_get_sale_price")){
				  echo "YES  IT IS";
			  }
			  else{
				  echo "NOOOOOO";
			  }
			?>
		</div>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
