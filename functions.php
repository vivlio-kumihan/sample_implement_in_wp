<?php
// 管理バーを非表示にする
add_filter('show_admin_bar', '__return_false');

// ウィジェットの登録
function theme_slug_widgets_init()
{
  register_sidebar(array(
    'name' => 'サイドバー', //ウィジェットの名前を入力
    'id' => 'sidebar', //ウィジェットに付けるid名を入力
  ));
}
add_action('widgets_init', 'theme_slug_widgets_init');

// 投稿のサイドバーにアイキャッチ画像を付与。
add_theme_support('post-thumbnails');

// CSSを読み込む
function my_theme_enqueue_styles()
{
  // メインスタイルシートを読み込む
  wp_enqueue_style('main-stylesheet', get_stylesheet_uri());

  // css-resetスタイルシートを読み込む
  wp_enqueue_style('css-reset', get_template_directory_uri() . '/styles/vendors/css-reset.css');
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// JavaScriptを読み込む
function my_theme_enqueue_scripts()
{
  // 外部のJavaScriptファイルを読み込む
  wp_enqueue_script('pace-js', 'https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js', array(), null, true);
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

  // 内部のJavaScriptファイルを読み込む
  wp_enqueue_script('mobile-menu', get_template_directory_uri() . '/scripts/libs/mobile-menu.js', array(), null, true);
  wp_enqueue_script('hero-slider', get_template_directory_uri() . '/scripts/libs/hero-slider.js', array(), null, true);
  wp_enqueue_script('gsap', get_template_directory_uri() . '/scripts/vendors/gsap.min.js', array(), null, true);
  wp_enqueue_script('text-animation', get_template_directory_uri() . '/scripts/libs/text-animation.js', array(), null, true);
  wp_enqueue_script('scroll', get_template_directory_uri() . '/scripts/libs/scroll.js', array(), null, true);
  wp_enqueue_script('main-js', get_template_directory_uri() . '/scripts/main.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


function my_theme_scripts()
{
?>
  <script type="text/javascript">
    var templateUrl = "<?php echo get_template_directory_uri(); ?>";
  </script>
<?php
}
add_action('wp_head', 'my_theme_scripts');