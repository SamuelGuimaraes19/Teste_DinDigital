<?php get_header(); ?>
<div class="content">
<?php $cnt = 0; $query = new WP_Query( array( 'post_type'=>'capas', 'posts_per_page' => 1,  'orderby' => 'ID', 'post__in' => array(33), ) ); ?>
		<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $cnt++; ?>
<div class="banner" style="	background-image: url(<?php $img = wp_get_attachment_image_src(get_field('imagem_url'), 'capa'); echo $img[0]; ?>);">
    	<div class="container">
        	<div class="col-xs-12">
			  <div>
				<h1 class="banner-titulo">
				<p class="p-banner"><?php the_title(); ?></p><?php the_field('description'); ?></h1>
<p class="p-banner"><?php the_field('subtitle'); ?></p>
<div class="div-btn">
            	<a href="<?php the_field('url_playstore'); ?>" target="_blanck" ><span class="btn-banner">Playstore</span></a>
				<a href="<?php the_field('url_app_store'); ?>" target="_blanck"><span class="btn-appstore">App store</span></a>
				</div>
            </div>
              </div>
			    </div>
		           </div>	    
        <?php endwhile; endif; wp_reset_postdata(); ?>
		
		
<div class="intro">
				<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/09/phones.png" alt="">
			</div>
			
			
<div class="smarts">
</div>
<div class="order">
<hr class="new4 d2">

<div><h1 class="title d1">How the app works</h1></div>
</div>
<?php $cnt = 0; $query = new WP_Query( array( 'post_type'=>'apps', 'posts_per_page' => 1,  'orderby' => 'ID', 'post__in' => array(49), ) ); ?>
		<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $cnt++; ?>
<div class="container" id="product" style="display: flex;flex-wrap: nowrap;justify-content: space-between;margin-bottom: 7%;">
<div class="app" style="place-content: center;">
<div class="smart-1 d2">
<img src="<?php $img = wp_get_attachment_image_src(get_field('smartphone'), 'smart'); echo $img[0]; ?>" class="shadow">
</div>
<div class="presentation d1">
<h3 class="product"><?php the_title(); ?></h3><h1 class="product"><?php the_field('description'); ?></h1> <br>
<h4 class="product"><?php the_field('subtitle'); ?></h4>
</div>
</div>
</div>
 <?php endwhile; endif; wp_reset_postdata(); ?>

<?php $cnt = 0; $query = new WP_Query( array( 'post_type'=>'apps', 'posts_per_page' => 1,  'orderby' => 'ID', 'post__in' => array(52), ) ); ?>
		<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $cnt++; ?>
<div class="container" style="display: flex;flex-wrap: nowrap;justify-content: space-between;">
<div class="app" style="place-content: center;">
<div class="presentation">
<h3 class="product"><?php the_title(); ?></h3><h1 class="product"><?php the_field('description'); ?></h1> <br>
<h4 class="product"><?php the_field('subtitle'); ?></h4>
</div>
<div class="smart-1">
<img src="<?php $img = wp_get_attachment_image_src(get_field('smartphone'), 'smart'); echo $img[0]; ?>" class="shadow">
</div>
</div>
</div>
<?php endwhile; endif; wp_reset_postdata(); ?>



<?php $cnt = 0; $query = new WP_Query( array( 'post_type'=>'apps', 'posts_per_page' => 1,  'orderby' => 'ID', 'post__in' => array(53), ) ); ?>
		<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $cnt++; ?>
<div class="container" id="product" style="display: flex;flex-wrap: nowrap;justify-content: space-between;margin-bottom: 7%;">
<div class="app" style="place-content: center;">
<div class="smart-1 d2">
<img src="<?php $img = wp_get_attachment_image_src(get_field('smartphone'), 'smart'); echo $img[0]; ?>" class="shadow">
</div>
<div class="presentation d1">
<h3 class="product"><?php the_title(); ?></h3><h1 class="product"><?php the_field('description'); ?></h1> <br>
<h4 class="product"><?php the_field('subtitle'); ?></h4>
</div>
</div>
</div>
 <?php endwhile; endif; wp_reset_postdata(); ?>


<?php $cnt = 0; $query = new WP_Query( array( 'post_type'=>'capas', 'posts_per_page' => 1,  'orderby' => 'ID', 'post__in' => array(44), ) ); ?>
		<?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $cnt++; ?>

<div class="banner-end" style="background-image:url(<?php $img = wp_get_attachment_image_src(get_field('imagem_url'), 'capa'); echo $img[0]; ?>);">
    	<div class="container">
        	<div class="col-xs-12">
			  <div>
				<h1 class="banner-titulo-end"><?php the_field('description'); ?></h1>
<p class="p-banner"><?php the_field('subtitle'); ?></p>
<div class="div-btn-2">
            	<a href="<?php the_field('url_playstore'); ?>"  style="margin-right: 10px;"><span class="btn-banner-end" style="border-radius:10px;">Playstore</span></a>
				<a href="<?php the_field('url_app_store'); ?>"><span class="btn-banner-end" style="background:transparent;border: 1px solid #fff; border-radius: 10px;">App store</span></a>
				</div>
            </div>
              </div>
			    </div>
		           </div>
				    <?php endwhile; endif; wp_reset_postdata(); ?>
				   
			</div>	   
				   

<?php get_footer(); ?>