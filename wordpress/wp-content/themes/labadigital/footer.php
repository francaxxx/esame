<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>">

		<div class="row row5 clearfix">
			 <footer>
					<div class="col col-6">
						<img class="img" src="../img/logo_blue.svg" alt="logotype labadigital">
						 <h2>© 2015/16 LABA - Libera Accademia di Belle Arti</h2>
					</div>
					<!--chiudo col col-6-->
			 </footer>
		</div>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
