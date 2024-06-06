<?php
/* Template Name: お知らせ一覧 */
get_header(); ?>

<main>
  <ul class="post-archive">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 10, // 1ページに表示する投稿数を指定
      'paged' => $paged
    );
    $my_query = new WP_Query($args);
    if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
    ?>
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
      <?php endwhile;
      wp_reset_postdata(); ?>
    <?php else : ?>
      <p><?php esc_html_e('No posts found.'); ?></p>
    <?php endif; ?>
  </ul>

  <div class="pagination">
    <?php
    echo paginate_links(array(
      'total' => $my_query->max_num_pages,
      'current' => $paged,
      'prev_text' => __('« Prev'),
      'next_text' => __('Next »'),
    ));
    ?>
  </div>
</main>

<?php get_footer(); ?>