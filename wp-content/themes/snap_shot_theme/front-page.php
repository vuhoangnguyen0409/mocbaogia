<?php
get_header();
?>
<!-- Banner -->
<section id="banner">
	<div class="inner">
		<h1>CÔNG TY GỖ </h1>
		<p>slogan slogan slogan slogan slogan slogan slogan slogan slogan slogan </a>
		</p>
		<ul class="actions">
			<li><a class="button alt scrolly big" href="<?php echo get_template_directory_uri();?>/thongtin/">Continue</a>
			</li>
		</ul>
	</div>
</section>

<!-- Gallery -->
<section id="galleries">

	<!-- Photo Galleries -->
	<div class="gallery">
		<header class="special">
			<h2>SẢN PHẪM MỚI</h2>
		</header>
		<div class="content">
			<?php $args=array( 'numberposts' => 8,'orderby'=> 'post_date', 'order' =>
                'DESC', 'post_type' => 'go',
                'post_status' => 'publish',
                'suppress_filters' => true,
                ); $posts_array = get_posts(
                $args ); foreach ( $posts_array
                as $post ) : setup_postdata(
                $post ); ?>
			<div class="media">
				<a href="<?php the_post_thumbnail_url( $size ); ?>"><img src="<?php the_post_thumbnail_url( $size ); ?>" title="<?php the_title(); ?>"></a>
			</div>
				<?php endforeach; ?>
		</div>
		<footer>
			 <a href="<?php echo get_template_directory_uri();?>/san-pham-go/" class="button big ">Bộ sưu tập</a> </footer>
	</div>
</section>
<?php get_footer();
?>