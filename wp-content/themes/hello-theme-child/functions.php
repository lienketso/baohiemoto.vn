<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );
// Custom css trong Dashboard admin //
add_action('admin_head', 'hanh_custom_css');
function hanh_custom_css() {
echo '<style>
li#wp-admin-bar-wp-logo { display: none; }  /* Ẩn logo WP trang Dashboard */
#footer-thankyou { font-size: 0px; } #footer-thankyou:before { content: "Làm web bằng cả trái tim ♥ Bùi Đức Hạnh"; font-size: 14px; font-weight: 500; color: #2842f7;} /* Custom footer Dashboard */
p#footer-upgrade {font-size: 0;} p#footer-upgrade:before { content: "fb hỗ trợ: facebook.com/buiduchanh2402"; font-size: 14px; color: #2842f7;} /* Custom footer Dashboard */
[data-slug="hello-elementor"] {display: none;} span.title-count.theme-count {display: none;} a.hide-if-no-js.page-title-action {display: none;} .theme.add-new-theme {display: none;}  /* Ẩn Theme */
.notice.notice-error {display: none;} /* Ẩn thông báo key mua hàng nhanh*/
tr#devvn-quick-buy-update {display: none;} /* Ẩn thông báo key mua hàng nhanh*/
.theme-browser .theme .theme-screenshot img {display: none;}.theme-browser .theme .theme-screenshot:before {background-image: url(https://i.imgur.com/vXrvhrq.png);
    content: "";width: -webkit-fill-available;height: -webkit-fill-available;position: absolute;background-size: cover;} /* Custom Screenshot */
#menu-posts-he-thong-gara-oto div.wp-menu-image.dashicons-before.dashicons-clock:before {content: "";background: url(/wp-content/uploads/2023/03/car.png);background-size: contain;background-repeat-y: no-repeat;position: absolute;top: 7px;left: 8px;} /* CSS Icon Gara*/
li#wp-admin-bar-customize, li#wp-admin-bar-updates, li#wp-admin-bar-comments,li#wp-admin-bar-new-content, li#wp-admin-bar-wp-logo, li#wp-admin-bar-jet_plugins {display:none;} /* Ẩn linh tinh bar*/
li#toplevel_page_jet-dashboard{display:none}li#toplevel_page_jet-engine{display:none}li#toplevel_page_jet-smart-filters{display:none}li#menu-posts-elementor_library{display:none} /* Ẩn linh tinh bar*/
</style>';
}
/** Custom Dashboard */
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
wp_add_dashboard_widget('custom_help_widget', 'Hỗ Trợ Kỹ Thuật', 'custom_dashboard_help');
}
function custom_dashboard_help() {
echo '<p>Chào mừng quý khách đã đến với khu vực quản trị website. Thông tin cần hỗ trợ vui lòng liên hệ với chúng tôi <a href="https://buiduchanh.net">tại đây</a>. Hoặc quý có thể liên hệ qua Facebook của tôi: <a href="https://www.facebook.com/buiduchanh2402/" target="_blank">@buiduchanh2402</a></p>';
}
//** Custom Trang Login Wordpres **//
	/* [1] Thay đổi link logo trang đăng nhập */
    function wpc_url_login(){return "https://buiduchanh.net";}
    add_filter('login_headerurl', 'wpc_url_login');
/* [2] Thay đổi Logo trang đăng nhập */
    function hw_custom_login_logo() {
        echo '<style type="text/css">
             h1 a { background-image:url(https://i.imgur.com/CWmaRnr.png)!important;
             background:#2271b1;border-radius:5px;border:1px solid #8c8f94;height:65px!important;
             width:120px!important;margin:auto!important;background-size:cover!important;
             background-position:center!important;background-repeat:no-repeat!important;
             text-indent:-9999px!important;outline:0!important;overflow:hidden!important;
             display:block!important;}.login #nav,p#backtoblog,.language-switcher {display:none!important;}
        </style>';
        }
    add_action('login_head', 'hw_custom_login_logo');
/* [3] Thêm thông tin liên hệ Login */
    function _custom_login_form() {
        echo '<div class="_login_bdh">
                <p><img src="https://i.imgur.com/5pd8tgC.png">ZALO: <a href="https://zalo.me/0966523518" target="_blank"> 0966.523.518</a></p>
                <p><img src="https://i.imgur.com/ceywU7b.png">Facebook: <a href="https://fb.com/buiduchanh2402" target="_blank">#buiduchanh2402</a></p>
                <p><img src="https://i.imgur.com/IMSKd79.png">Liên hệ công việc: <a href="https://zalo.me/0966523518" target="_blank">Bấm vào đây</a></p>
              </div>
              <style type="text/css">._login_bdh{padding:10px 10px 5px 10px;margin:5px 0px 15px 0px;border:1px solid #8c8f94;border-radius:4px;
              background-image:url(https://i.imgur.com/5GSHEKn.png);content:"";object-fit:contain;background-size:14%;background-position:
              bottom right 5px!important;background-repeat:no-repeat!important}._login_bdh p{display:flex;align-items:center;}
              ._login_bdh img{margin-right:5px;width:15px;height:15px;}._login_bdh a{margin-left:5px;}._login_bdh a:hover{color:#0095ff;}
              ._login_bdh:before{content:"Thông tin liên hệ";color:#4d99f6;margin-top:-20px;font-weight:bold;background:#fff;padding:0px 5px;
              position:absolute}form#loginform{border-radius:4px;}
			  </style>';}
    add_action('login_form', '_custom_login_form');
/* [4] Thêm thông tin menu bar admin */
    function _custom_show_admin_bar() {
        echo '<div class="_login_bar">
                <p><img src="https://i.imgur.com/5pd8tgC.png">ZALO: <a href="https://zalo.me/0966523518" target="_blank"> 0966.523.518</a></p>
                <p><img src="https://i.imgur.com/ceywU7b.png">Facebook: <a href="https://fb.com/buiduchanh2402" target="_blank">#buiduchanh2402</a></p>
                <p><img src="https://i.imgur.com/IMSKd79.png">Liên hệ công việc: <a href="https://zalo.me/0966523518" target="_blank">Bấm vào đây</a></p>
              </div>
              <style type="text/css">._login_bar img{width:15px;margin:0 5px -3px 0}._login_bar{display:flex;position:fixed;z-index:99999999999999;top:0.2%;left:60%}
				._login_bar p{margin:5px 10px!important;color:#fff;font-weight:500;font-size:13px}._login_bar a{color:#fff;font-size:13px}</style>';}
    add_action('admin_bar_menu', '_custom_show_admin_bar');
/*** Classic Editor */
add_filter('use_block_editor_for_post', '__return_false');
/** Vô hiệu hóa XML-RPC trong WordPress giúp bảo mật */
add_filter('xmlrpc_enabled', '__return_false');
//* Ngăn WordPress tạo ảnh tự động với nhiều kích thước không dùng
function remove_default_image_sizes( $sizes) {
    unset( $sizes['large']);
    unset( $sizes['thumbnail']);
    unset( $sizes['medium']);
    unset( $sizes['medium_large']);
	unset( $sizes['woocommerce_thumbnail']);
    unset( $sizes['woocommerce_single']);
    unset( $sizes['woocommerce_gallery_thumbnail']);
    unset( $sizes['1536x1536']);
    unset( $sizes['2048x2048']);
    unset( $sizes['360x180']);
    unset( $sizes['150x150']);
    unset( $sizes['150x133']);
    unset( $sizes['768x0']);
    unset( $sizes['0x0']);
    unset( $sizes['750x375']);
    unset( $sizes['1140x570']);
    unset( $sizes['750x536']);
    unset( $sizes['1140x815']);
    unset( $sizes['360x504']);
    unset( $sizes['75x75']);
	unset( $sizes['100x100']);
    unset( $sizes['300x300']);
    unset( $sizes['600x338']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'remove_default_image_sizes');
// Xóa hyperlink comment của tác giả
add_filter( 'get_comment_author_link', 'rv_remove_comment_author_link', 10, 3 );
function rv_remove_comment_author_link( $return, $author, $comment_ID ) {
	return $author;
}
// Thời gian comment giờ trước
function pressfore_comment_time_output($date, $d, $comment){
	return sprintf( _x( '%s trước', '%s = human-readable time difference', 'your-text-domain' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) );
}
add_filter('get_comment_date', 'pressfore_comment_time_output', 10, 3);
// Tự động thay đổi Năm trong văn bản chỉ cần đặt là [year] là sẽ ra năm //
function year_shortcode() {
  $year = date('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');
// Dịch mọi thứ //
 function hanh_dich_text( $translated ) {
  $text = array(
	'ago' => 'trước',
	'Tạm tính' => 'Thành tiền',
	'Thanh toán' => 'Tiến Hành Đặt Hàng',
	'No products in the cart.' => 'Chưa có sản phẩm nào trong giỏ hàng',
	'instock' => 'Còn hànng',
  );
  $translated = str_ireplace( array_keys($text), $text, $translated );
  return $translated;
 }
 add_filter( 'gettext', 'hanh_dich_text', 20 );
 /** Cài SMTP **/
add_action( 'phpmailer_init', function( $phpmailer ) {
    if ( !is_object( $phpmailer ) )
    $phpmailer = (object) $phpmailer;
    $phpmailer->Mailer     = 'smtp';
    $phpmailer->Host       = 'smtp.gmail.com';
    $phpmailer->SMTPAuth   = 1;
    $phpmailer->Port       = 587;
    $phpmailer->Username   = 'haihm.bhot@gmail.com'; //điền tài khoản gmail của bạn 
    $phpmailer->Password   = 'lvaufiqpiujgnxlt'; //điền mật khẩu ứng dụng mà bạn đã tạo ở trên
    $phpmailer->SMTPSecure = 'TLS';
    $phpmailer->From       = 'haihm.bhot@gmail.com'; //điền tài khoản gmail của bạn
    $phpmailer->FromName   = 'Tư vấn Baohiemoto';
});
/*Xóa ảnh khi xóa sản phẩm*/
function delete_all_attached_media( $post_id ) {
    if ( get_post_type($post_id) == "product" ) {
      $attachments = get_attached_media( '', $post_id );
      foreach ($attachments as $attachment) {
        wp_delete_attachment( $attachment->ID, 'true' );
      }
    }
  }
  add_action( 'before_delete_post', 'delete_all_attached_media' );
/* Chuyển đơn vị tiền Woocomêrce đ thành VND 
add_filter( 'woocommerce_currencies', 'add_my_currency' ); 
function add_my_currency( $currencies ) {
     $currencies['VND'] = __( 'Currency name', 'woocommerce' );
     return $currencies;
}
add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
function add_my_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'VND': $currency_symbol = 'VNĐ'; break;
     }
return $currency_symbol;
}
 /* Delete nut tiep thi */
 add_filter( 'woocommerce_admin_features', function( $features ) {
     return array_values(
         array_filter( $features, function($feature) {
             return $feature !== 'marketing';
         } ) 
     );
 } );
 //Chỉnh số lượng sản phẩm trên 1 page
 add_filter( 'loop_shop_per_page', function( $cols ){
  return 20;
 });
 // loai page ra khoi tim kiem
 function SearchFilter($query) {
 if ( is_admin() || ! $query->is_main_query() )
 return;
 if ($query->is_search) {
 $query->set('post_type', 'post');
 }
 return $query;
 }
 add_filter('pre_get_posts','SearchFilter');
 // Xóa Version WP
 function remove_wp_version_strings( $src ) {
 global $wp_version;
 parse_str(parse_url($src, PHP_URL_QUERY), $query);
 if ( !empty($query['ver']) && $query['ver'] === $wp_version ) {
 $src = remove_query_arg('ver', $src);
 }
 return $src;
 }
 add_filter( 'script_loader_src', 'remove_wp_version_strings' );
 add_filter( 'style_loader_src', 'remove_wp_version_strings' );
 /* Hide WP version strings from generator meta tag */
function wp_remove_version() {
    return '';
    }
    add_filter('the_generator', 'wp_remove_version');
 /** Xóa Breadcrumbs "sản phẩm/shop" **/
add_filter( 'wpseo_breadcrumb_single_link' ,'wpseo_remove_breadcrumb_link', 10 ,2);
function wpseo_remove_breadcrumb_link( $link_output , $link ){
	$text_to_remove = 'Sản phẩm';
	$text_to_remove = 'Danh mục sản phẩm';
	if( $link['text'] == $text_to_remove ) {
		$link_output = '';
	}
return $link_output;
}
/* Canonical */
function prefix_filter_canonical_web_story( $canonical ) {
    if ( is_singular( 
  web-story
   ) ) {
      return false;
    }
    return $canonical;
  }
  add_filter( 'wpseo_canonical', 'prefix_filter_canonical_web_story' );
  // ** * Cho phép tải lên cho các tệp hình ảnh webp. * /
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');
// ** * Kích hoạt xem trước / hình thu nhỏ cho các tệp hình ảnh webp. * / 
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);
// Tự động chọn hình size lớn nhất và căn giữa hình ảnh //
function custom_image_size() {
    update_option('image_default_align', 'center' );
    update_option('image_default_size', 'large' ); }
    add_action('after_setup_theme', 'custom_image_size');
// Thêm FontAwesome 6 Pro vào Website
function vietcoders_font_awesome_6() {
	wp_enqueue_style( 'vietcoders_fontawesome', get_stylesheet_directory_uri() . '/fonts/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'vietcoders_font_awesome_6' );
/* Giá tiết kiệm */
add_filter( 'woocommerce_get_price_html', 'hwp_simple_product_price_format', 10, 2 );
 
function hwp_simple_product_price_format( $price, $product ) {
    
   if ( $product->is_on_sale() && $product->is_type('simple') ) {
      $price = sprintf( __( '<div class="was-now-save"><div class="was">%1$s</div><div class="now">%2$s</div><span class="save">%3$s</span></div>', 'woocommerce' ), wc_price ( $product->get_regular_price() ), wc_price( $product->get_sale_price() ), wc_price( $product->get_regular_price() - $product->get_sale_price() )  );      
   }
   return $price;
}
/* Giá tiết kiệm Biến thể */
add_filter( 'woocommerce_get_price_html', 'hwp_variable_product_price_format', 10, 2 );
 
function hwp_variable_product_price_format( $price, $product ) {
    
   if ( $product->is_on_sale() && $product->is_type('variable') ) {
      $price = sprintf( __( '<div class="was-now-save"><div class="was">%1$s</div><div class="now">%2$s</div><span class="save">%3$s</span></div>', 'woocommerce' ), wc_price ( $product->get_variation_regular_price() ), wc_price( $product->get_variation_price() ), wc_price( $product->get_variation_regular_price() - $product->get_variation_price() )  );      
   }
   return $price;
}
// Thay chữ thêm vào giỏ hàng */
add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );
// → → → Thay chữ trong trang danh mục sản phẩm
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_cart_button_text' );
// → → → Thay chữ trong trang chi tiết của bài viết
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );
function woo_custom_cart_button_text() {
return __( 'Mua ngay', 'woocommerce' );
}
//* CHuyển text Search Results for: thành Tìm kiếm cho *//
add_filter( 'elementor/utils/get_the_archive_title','archive_callback' );
function archive_callback( $title ) {
 if ( is_search() ) { 
   return 'Tìm kiếm cho: ' . get_search_query() ; 
 } 
   return $title; 
}
/** Get ảnh sản phẩm ra trang checkout **/
add_filter( 'woocommerce_cart_item_name', 'bbloomer_product_image_review_order_checkout', 9999, 3 );
  
function bbloomer_product_image_review_order_checkout( $name, $cart_item, $cart_item_key ) {
    if ( ! is_checkout() ) return $name;
    $product = $cart_item['data'];
    $thumbnail = $product->get_image( array( '50', '50' ), array( 'class' => 'alignleft' ) );
    return $thumbnail . $name;
}
//* Get ảnh sản phẩm ra trang Checkout - Chi tiết đơn hàng *//
add_filter( 'woocommerce_order_item_name', 'quadlayers_product_image_orderpay', 9999, 3 );
function quadlayers_product_image_orderpay( $name, $item, $extra ) {
    if ( ! is_checkout() ) 
        {return $name;}
    $product_id = $item->get_product_id();
    $_product = wc_get_product( $product_id );
    $thumbnail = $_product->get_image();
    $image = '<div class="quadlayers_product_image_orderpay" style="width: 50px; height: 50px; display: inline-block; vertical-align: middle;">'
                . $thumbnail .
            '</div>'; 
    /* Ở trên, bạn có thể thay đổi chiều rộng, chiều cao và căn chỉnh của hình ảnh theo cách bạn muốn*/
    return $image . $name;
}
/* Thay text "Coupon code" Mã Giảm Giá */
function my_text_strings( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
        case 'Coupon code' :
            $translated_text = __( 'Mã giảm giá nếu có...', 'woocommerce' );
            break;
    }
    return $translated_text;
}
add_filter( 'gettext', 'my_text_strings', 20, 3 );
/* Thay + thêm text vào placeholder tại trang checkout trong woocommerce */
add_filter( 'woocommerce_checkout_fields' , 'override_billing_checkout_fields', 20, 1 );
function override_billing_checkout_fields( $fields ) {
    $fields['billing']['billing_first_name']['placeholder'] = 'Điền họ tên';
	$fields['billing']['billing_last_name']['placeholder'] = 'Điền tên của bạn';
	$fields['billing']['billing_phone']['placeholder'] = 'Điền số điện thoại của bạn';
	$fields['billing']['billing_email']['placeholder'] = 'Điền Email của bạn';
	$fields['billing']['billing_city']['placeholder'] = 'Tỉnh - Thành Phố';
    return $fields;
}
/* Xóa field không cần thiết tại trang checkout trong woocommerce */
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields',99 );
function custom_override_checkout_fields( $fields ) {
 //Danh sách field cần xóa ở đây ↓↓↓
 unset($fields['billing']['billing_first_name']); //Xóa field Order Notes
 return $fields;
}