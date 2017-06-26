<?php
/**
 * Template Name: labadigital
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>
						<div class="row clearfix">
							 <div class="cols col2">
										<img src="http://localhost:8888/esame-labadigital/wp-content/uploads/2017/06/job-titles.jpg" alt="pc laptop" class="foto">
							 </div>
							 <div class="cols col2-a">
										 <div class="box box-1">
											 <p>Il biennio di specializzazione in “Web & App Design” si inserisce perfettamente nel panorama professionale
													contemporaneo, proponendo un piano di studi completo ed articolato, che attraversa tutte le complesse dinamiche
													della comunicazione digitale. <br> Il suo scopo è quello di fornire agli iscritti una preparazione adeguata
													per inserirsi nel mondo dell'information technology, rispondendo in modo pratico e concreto alle richieste del
													mercato nell'ambito della progettazione interattiva legata al web, al mobile ed al mondo dell'app design, oltre
													alla gestione di campagne digitali, DEM, social e web marketing.<br> Il programma di studi per il corso di
													specializzazione in digital design si articola in un biennio nel quale vengono introdotte, progressivamente,
													discipline tecniche e progettuali necessarie per acquisire le nozioni professionali tipiche della comunicazione digitale.
											 </p>
											 <h3>Piano di studi</h3>
										 </div>
										 <!--chiudo box-1-->
							 </div>
						</div>
						<!--/* chiudo row clearfix */-->
						</div>
						<div class="row row2 clearfix">
						<div class="cols col3-a">
							 <div class="box box-2">
								 <p>Gli allievi che intendono iscriversi al biennio di specializzazione devono dimostrare di conoscere
										le dinamiche progettuali legate alla comunicazione tradizionale e ai principi del graphic design.
										<br>È richiesta la conoscenza degli strumenti e dei software di progettazione grafica (Suite Adobe).
										<br>È rivolto principalmente a studenti con diploma di primo livello in graphic design e arti visive
										e professionisti nell'ambito della comunicazione tradizionale che desiderano avvicinarsi al mondo digitale,
										attraverso un corso di web e app design in Lombardia.
								 </p>
								 <h3>Requisiti Minimi per accedere al corso di Web Design</h3>
							 </div>
							 <!--chiudo box-1-->
						</div>
						<!--chiudo colonna-1-6-->
						</div>
						<!--chiudo row-->
						<div class="row clearfix">
						<div class="cols">
							 <div class="box box-3">
								 <p>Il biennio di specializzazione ha come principale obiettivo la formazione di figure che siano in grado di gestire un qualsiasi progetto digitale, lavorando e condividendo esperienze in team, affrontando dinamiche creative e tecnologiche legate al web, al mobile, all'interaction design.<br>Il corso fornirà le conoscenze base per la progettazione, il design e lo sviluppo di un sito web con software cms (drupal e/o wordpress). Verranno acquisite e consolidate le competenze base sui html5/css3/javascript, l'approccio client/server dei servizi, browser e tecnologie correlate, programmazione base in javascript e php. <br>
										Saranno messe in evidenza le caratteristiche multidisciplinari dei progetti web e la necessità di acquisire l'approccio corretto per affrontare la miriade di tecnologie, software e “best practices” utili per la buona riuscita di un progetto sul web.
										Durante le lezioni del secondo semestre, verrà svolta l'attività pratica di progettazione di un sito web, verranno analizzate le basi tecniche, di parametrizzazione e layout per la gestione di un progetto reale.
								 </p>
								 <h3>Come diventare professionisti in Digital Design?</h3>
								</div>
							 <!--chiudo box-3-->
						</div>
						<!--chiudo col-->
						</div>
						<div class="row row4 clearfix">
						<div class="cols col3-a">
							 <div class="box box-4">
								 <p>Il primo biennio di specializzazione in digital design a Brescia propone
										un percorso formativo che porterà gli allievi al raggiungimento del livello richiesto dal mercato,
										sviluppando skills indispensabili come la capacità progettuale, le abilità creative;
										capacità di gestione del lavoro in team, la conoscenza dei software, la conoscenza dei linguaggi e della tecnologia digitale;
										capacità di gestione delle campagne adv multimediali,la capacità di gestione degli strumenti della rete.
										Il corso ha la finalità di fornire le conoscenze base necessarie per affrontare la progettazione, il design
										e lo sviluppo di un sito web un progetto web moderno, basato su cms opensource. Al termine del corso lo studente sarà in grado di gestire,
										in autonomia o in un team multidisciplinare, la progettazione, installazione e gestione contenuti di un sito,
										avendo nel contempo acquisito ed elaborato l'approccio corretto per l'utilizzo degli strumenti software e delle metodologie utilizzati a livello professionale.
								 </p>
								 <h3>Cosa offre il corso di App e Web Design?</h3>
							 </div>
							 <!--chiudo box-1-->
						</div>
						<!--chiudo colonna-1-6-->
						</div>
						<!--chiudo row-->
						<div class="row row6 clearfix">
							 <div class="box box-5">
								 <p>I docenti del nsotro corso sono tutti dei professionisti affermati.
										Si diploma e si laurea a pieni voti prima al liceo Artistico Cassinari di Piacenza e poi al Politecnico di Milano nel corso di laurea di Disegno industriale ramo Comunicazione e Multimedia, acquisisce infine un ulteriore diploma VUE di certificazioni Microsoft in programmazione VB Desktop.
								 </p>
								 <h3>I nostri docenti </h3>
							 </div>
							 <!--chiudo box-3 -->
						</div> <!-- ow row6 clearfix-->
						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
