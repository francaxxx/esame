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
						<img class="img" src="http://localhost:8888/esame-labadigital/wp-content/uploads/2017/06/cropped-logotype.png" alt="logotype labadigital">
						 <h2>© 2015/16 LABA - Libera Accademia di Belle Arti</h2>
						 <div class="social">
					     <a href="https://www.facebook.com/laba.edu"><img src="http://localhost:8888/esame-labadigital/wp-content/uploads/2017/06/fb.png" alt="" class="icon"></a>
					     <a href="https://twitter.com/labatwit"><img src="http://localhost:8888/esame-labadigital/wp-content/uploads/2017/06/tw.png" alt="" class="icon"></a>
					     <a href="http://youtube.com/labaview"><img src="http://localhost:8888/esame-labadigital/wp-content/uploads/2017/06/yt.png" alt="" class="icon"></a>
					     <a href="http://it.linkedin.com/in/accademialaba"><img src="http://localhost:8888/esame-labadigital/wp-content/uploads/2017/06/in.png" alt="" class="icon"></a>

					   </div> <!-- social -->
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
