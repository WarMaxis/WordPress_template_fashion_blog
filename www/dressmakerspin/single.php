<?php get_header(); ?>

<div class="container categories post">

		<div class="row">

			<!-- Lista postów -->
			<section class="col-sm-8 blog-main">

				<?php if(have_posts()) : ?>
		   		<?php while(have_posts()) : the_post(); ?>

				<!-- Zdjęcie wpisu -->
				<div class="blog-header post">
					<div class="header-container">

						<!-- Znak strony -->
						<img class="logo2" src="<?php echo get_bloginfo('template_directory');?>/images/logo2.png" alt="logo2" height="350">

						<?php if ( has_post_thumbnail() ) : ?>
							<img class="post-photo" src="<?php the_post_thumbnail_url(); ?>" alt="post-photo">
						<?php endif; ?>

					</div>
				</div>

				<article class="blog-post all" id="post-<?php the_ID(); ?>">
					
					<p class="blog-post-meta"><?php foreach((get_the_category()) as $category) { $category->cat_name . ' '; } ?><a href="<?php echo get_category_link(get_cat_id($category->cat_name)); ?>"><?php echo $category->cat_name ?></a><time><?php the_time('d / m'); ?></time></p>
					
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title('<h2 class="blog-post-title">','</h2>'); ?>
					</a>
					
					<p><?php the_content(); ?></p>
					
				</article>	<!-- /.blog-post -->
				
		   		<?php endwhile; ?>

				<?php else : ?>

				<article class="subpages-article">

					<h1 class="subpages-title">Nie znaleziono takiego wpisu :-(</h1>

					<p class="profile-description subpage"><strong>Być może jest to chwilowy błąd.</strong><br>Jeśli chcesz możesz wejść na moją stronę główną <a href="<?php echo home_url(); ?>">klikając tutaj</a> :-)</p>

				</article>

				<?php endif; ?>

				<div class="reference-container">
					<p class="reference-blockquote">CZYTAJ RÓWNIEŻ</p>
					<div class="reference-border"></div>
				</div>

				<div class="more-posts">

					<?php global $post; $myposts = get_posts('numberposts=1&offset=1&'); foreach($myposts as $post) : setup_postdata($post);?>
					<div class="col-sm-4 first">
						<p class="blog-post-meta more-posts-title"><?php foreach((get_the_category()) as $category) { $category->cat_name . ' '; } ?><a href="<?php echo get_category_link(get_cat_id($category->cat_name)); ?>"><?php echo $category->cat_name ?></a><time><?php the_time('d / m'); ?></time></p>
						<a href="<?php the_permalink(); ?>">
							<h3 class="blog-post-title read-also"><?php the_title(); ?></h3>
						</a>
					</div>
					<?php endforeach; ?>

					<?php global $post; $myposts = get_posts('numberposts=1&offset=2&'); foreach($myposts as $post) : setup_postdata($post);?>
					<div class="col-sm-4 middle">
						<p class="blog-post-meta more-posts-title"><?php foreach((get_the_category()) as $category) { $category->cat_name . ' '; } ?><a href="<?php echo get_category_link(get_cat_id($category->cat_name)); ?>"><?php echo $category->cat_name ?></a><time><?php the_time('d / m'); ?></time></p>
						<a href="<?php the_permalink(); ?>">
							<h3 class="blog-post-title read-also"><?php the_title(); ?></h3>
						</a>
					</div>
					<?php endforeach; ?>

					<?php global $post; $myposts = get_posts('numberposts=1&offset=3&'); foreach($myposts as $post) : setup_postdata($post);?>
					<div class="col-sm-4 last">
						<p class="blog-post-meta more-posts-title"><?php foreach((get_the_category()) as $category) { $category->cat_name . ' '; } ?><a href="<?php echo get_category_link(get_cat_id($category->cat_name)); ?>"><?php echo $category->cat_name ?></a><time><?php the_time('d / m'); ?></time></p>
						<a href="<?php the_permalink(); ?>">
							<h3 class="blog-post-title read-also"><?php the_title(); ?></h3>
						</a>
					</div>
					<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>

				</div>

				<?php comments_template(); ?> 

			</section>	<!-- /.blog-main -->

			<!-- Sidebar -->
			<?php get_sidebar( 'single' ); ?>

		</div>	<!-- /.row -->

</div>	<!-- /.container -->

<?php get_footer(); ?>
