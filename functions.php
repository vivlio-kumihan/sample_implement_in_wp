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

// 投稿のサイドバーにアイキャッチ画像を付与する機能を追加する。
add_theme_support('post-thumbnails');

// archive.phpを表示させるための設定
// post_has_archive()関数の定義
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    // 任意のスラッグ名を登録←アーカイブページが有効になる。
    $args['has_archive'] = 'archive';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


// カスタムフィルターで抜粋の文字数を変更
function custom_excerpt_mblength($length) 
{
  return 50;
}
add_filter('excerpt_mblength', 'custom_excerpt_mblength');

// 抜粋のmoreテキストを変更
function custom_excerpt_more($more)
{
  return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');


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

// // 【重要】
// // 便利かもしれないが、スタイルはSCSSのBEMで管理したいのでこれは採用しない。
// // body要素へbody_class();タグは必須。
// // スラッグでクラス名を付けてくれる。
// // ページを飛ぶたびにそのページのbody要素に
// // スラッグ名をクラス名として付与してくれる便利機能。
// add_filter('body_class', 'add_page_slug_class_name');
// function add_page_slug_class_name($classes)
// {
//   if (is_page()) {
//     $page = get_post(get_the_ID());
//     $classes[] = $page->post_name;
//   }
//   return $classes;
// }