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
					<div class="col col6">
					<a href="http://localhost:8888/esame-labadigital/home/"><img class="img" src="http://localhost:8888/esame-labadigital/wp-content/uploads/2017/06/cropped-logotype.png" alt="logotype labadigital"></a>
					<br /><br /> <h2>© 2015/16 LABA - Libera Accademia di Belle Arti</h2>
					<div class="social">
						<ul>
					 <li><a href="https://www.facebook.com/laba.edu"><img src="http://localhost:8888/esame-labadigital/wp-content/uploads/2017/06/facebook-circular-logo.png" alt="" class="icon"></a></li>
					 <li> <a href="https://twitter.com/labatwit"><img src="http://localhost:8888/esame-labadigital/wp-content/uploads/2017/06/twitter-logo-copia-e1498044098283.png" alt="" class="icon"></a></li>
				 <li><a href="http://youtube.com/labaview"><img src="http://localhost:8888/esame-labadigital/wp-content/uploads/2017/06/youtube-symbol.png" alt="" class="icon"></a></li>
				 <li><a href="http://it.linkedin.com/in/accademialaba"><img src="http://localhost:8888/esame-labadigital/wp-content/uploads/2017/06/linkedin-1-e1498045082397.png" alt="" class="icon"></a></li>
					</ul>
				 </div> <!-- social -->
					</div>
					<!--chiudo col col-6-->
			 </footer>
		</div>
<!--chiudo row row5-->
			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
