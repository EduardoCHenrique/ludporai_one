<?php get_header(); ?>
<ul class="posts__list" id="content" role="main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li class="home__post-thumb" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php if ( has_post_thumbnail()) : ?>
        <a class="home__post-thumb__link"href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
          <figure class="home__post-thumb__figure">
            <?php the_post_thumbnail('', array('class' => 'home__post-thumb__image')); ?>
          </figure>
          <div class="home__post-thumb__text-wrapper">
            <h2 class="home__post-thumb__text"><?php the_field('thumb_text_home'); ?></h2>
          </div>
        </a>
      <?php endif; ?>
      <div class="entry-links"><?php wp_link_pages();  ?></div>
    </li>
  <?php endwhile; endif; ?>
</ul>

<?php /* get_footer(); */ ?> 