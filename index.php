<?php get_header(); ?>

			<?php
				$blog_hero = of_get_option('blog_hero');
				if ($blog_hero){
			?>

			<?php
				}
			?>

			<div id="content" class="clearfix row-fluid">

				<div id="main" class="span9 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

												<header>

													<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

													<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?>.</p>

												</header> <!-- end article header -->

												<section class="post_content">
													<?php the_post_thumbnail( 'wpbs-featured' ); ?>
													<p>
														<?php
															$excerpt_length = 500; // length of excerpt to show (in characters)
															$the_excerpt = get_the_excerpt();
															if($the_excerpt != ""){
																$the_excerpt = substr( $the_excerpt, 0, $excerpt_length );
																echo $the_excerpt;
														?>
														<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="">Read more &rsaquo;</a>
														<?php } ?>
													</p>

												</section> <!-- end article section -->

												<footer>


												</footer> <!-- end article footer -->

											</article> <!-- end article -->
					<?php endwhile; ?>



					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>

						<?php page_navi(); // use the page navi function ?>

					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>

					<?php else : ?>

					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>

					<?php endif; ?>

				</div> <!-- end #main -->

				<?php get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>