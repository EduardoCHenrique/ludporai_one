<div class="blog-post">
  <h1>asd;lmfa;sdfl;kaslkfklasdklfjajsdjkhafds</h1>
  <h1><?php wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail' ); ?></h1>
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
 <?php the_content(); ?>
</div><!-- /.blog-post -->