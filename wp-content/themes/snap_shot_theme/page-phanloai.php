			<?php
			/**
			 * Template Name: phanloai 
			 **/
			get_header();
			?>
			<!-- Gallery -->
<section id="galleries">
	<!-- Photo Galleries -->
	<div class="inner">

		<!-- Filters -->

		<header>
			<h1>PHÂN LOẠI</h1>
		</header>
		<div class="content">
		
		<?php 
			$terms = get_terms( array(
    'taxonomy' => 'danh_muc_go',
    'hide_empty' => false,
) );
echo '<ul>';
			foreach($terms as $term){ ?>
			<li><a href="<?php echo get_term_link($term) ;?>"><?php echo $term->name ;?></a></li>
			<?php } ?>
		</div>
			
		</div>
	</div>
</section>
<!-- Footer -->
<?php get_footer();
?>