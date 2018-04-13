<?php 
/* Template Name: Gallery page*/
get_header(); 
?>
<div class="headLine">
    <div class="bgHline inner"><?php if ( has_post_thumbnail() )  the_post_thumbnail() ;?></div>
    <div class="hLine01"><h2><?php echo (get_field('title_image')) ? '<img src="'. get_field('title_image') .'" alt="'. get_the_title().'">' : get_the_title() ;?></h2></div>
</div>

<div class="breadcrumb">
    <ul class="clearfix inner">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
        <li><?php the_title() ?></li>
    </ul>
</div>
            
<div id="contents" class="clearfix">
    <div id="main">

<?php
//Get parents
$terms = get_terms( 'categories', array('hide_empty' => false, 'parent' => 0 ) );
?>
 				<h3 class="hLine02">施工ギャラリー<span><img src="<?php echo get_bloginfo('template_directory');?>/img/gallery/txt_case.png" alt="Construction case"></span></h3>
				<p class="f14 mb30">今までご依頼いただきました数々の施工事例の中から一例をご紹介します。</p>
				<?php if(count($terms) > 0) :?>
				<?php foreach($terms as $term): ?>
				<div class="<?php echo  $term->slug ;?> section">
					<h4 class="hline03"><?php echo  $term->name ;?></h4>
					<?php $categories = get_terms('categories', array('parent' => $term->term_id, 'hide_empty' => false)); ?>
					<?php if(count($categories) > 0) :?>
					<ul class="listGallery fixHeight clearfix">	
						<?php foreach($categories as $item): ?>
						<li>
							<a href="<?php echo get_term_link($item) ;?>"><img src="<?php echo get_field('image',$item) ;?>" alt="<?php echo  $item->name ;?>" /></a>
							<div class="wrapGallery">
								<p class="galleryName fixHeightChild"><img src="<?php echo get_field('image_title',$item) ;?>" alt="<?php echo  $item->name ;?>" /></p>
								<p><?php echo  $item->description ;?></p>
							</div>
						</li>
						<?php endforeach ;?>
					</ul>
					<?php endif ;?>
				</div><!--/ galleryService-->
				<?php endforeach ;?>
				<?php endif ;?>
    </div>
</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.listGallery li').biggerlink();
		});
	</script>
<?php get_footer(); ?>