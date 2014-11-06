<?php get_header(); ?>
	<div id="content">

	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<p class="info"><?php the_time('Y年m月d日') ?> &#183; <a href="<?php the_permalink() ?>">阅读全文</a> &#183;  <?php comments_popup_link('无评论', '评论(1)', '评论(%)'); ?></p></p>
				<?php if(!is_single()) {
					the_excerpt();
				} else {
					the_content('Go reading');
				} ?>
			</div>
			
		<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; ') ?></div>
			<div class="alignright"><?php previous_posts_link(' &raquo;') ?></div>
		</div>
		
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
