<?php get_header(); ?>

<main>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail('full'); // アイキャッチ画像を表示。サイズを変更する場合は 'thumbnail', 'medium', 'large' などに変更 
              ?>
            </div>
          <?php endif; ?>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <div class="entry-meta">
            <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
            <span class="author"><?php the_author(); ?></span>
            <span class="categories"><?php the_category(', '); ?></span>
          </div>
        </header>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
        <footer class="entry-footer">
          <?php the_tags('<span class="tag-links">', ', ', '</span>'); ?>
        </footer>
      </article>

      <nav class="post-navigation">
        <div class="nav-previous"><?php previous_post_link('%link', '← %title'); ?></div>
        <div class="nav-next"><?php next_post_link('%link', '%title →'); ?></div>
      </nav>

  <?php endwhile;
  endif; ?>
</main>

<?php get_footer(); ?>