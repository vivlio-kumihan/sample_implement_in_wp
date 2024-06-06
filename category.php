<?php get_header(); ?>

<main>
  <header class="archive-header">
    <h1 class="archive-title">
      <?php single_cat_title(); // カテゴリー名を表示 
      ?>
    </h1>
    <?php if (category_description()) : // カテゴリーの説明を表示 
    ?>
      <div class="archive-description">
        <?php echo category_description(); ?>
      </div>
    <?php endif; ?>
  </header>

  <?php if (have_posts()) : ?>
    <ul class="post-archive">
      <?php while (have_posts()) : the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <div class="frame">
              <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
              } ?>
            </div>
            <div class="header-sub">
              <ul class="post-categorie">
                <?php
                $categories = get_the_category();
                foreach ($categories as $category) {
                  echo '<li>' . esc_html($category->name) . '</li>';
                }
                ?>
              </ul>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
            </div>
            <h4 class="shrinkLine"><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>

    <div class="pagination">
      <?php
      echo paginate_links(array(
        'total' => $wp_query->max_num_pages,
        'prev_text' => __('« Prev'),
        'next_text' => __('Next »'),
      ));
      ?>
    </div>
  <?php else : ?>
    <p><?php esc_html_e('No posts found.'); ?></p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>