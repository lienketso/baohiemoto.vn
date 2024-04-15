<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
        
if ( !function_exists( 'earna_child_register_scripts' ) ):
    function earna_child_register_scripts() {
        wp_enqueue_style( 'earna-child-style', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'earna_child_register_scripts',99 );

// END ENQUEUE PARENT ACTION

// Đăng ký shortcode
function my_youtube_video_list_shortcode( $atts ) {
    // Thiết lập các thuộc tính mặc định và ghi đè bằng các giá trị được truyền vào
    $atts = shortcode_atts( array(
        'videos' => '', // Chuỗi chứa các ID video của YouTube, phân tách bằng dấu phẩy
    ), $atts, 'youtube_video_list' );

    // Chuyển đổi chuỗi ID video thành một mảng
    $video_ids = explode( ',', $atts['videos'] );

    // Bắt đầu chuỗi HTML để hiển thị danh sách video
    $output = '<div class="container">';
    $output .= '<div class="video-home">';
    $output .= '<h4>Video nổi bật</h4>';
    $output .= '<div class="youtube-video-list">';
    // Duyệt qua mỗi ID video và thêm nó vào danh sách
    foreach ( $video_ids as $video_id ) {
        // Loại bỏ bất kỳ khoảng trắng không mong muốn
        $video_id = trim( $video_id );
        // Nếu ID video không rỗng, thêm nó vào danh sách
        if ( ! empty( $video_id ) ) {
            $output .= '<div class="youtube-video">';
            $output .= '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe>';
            $output .= '</div>';
        }
    }

    // Đóng thẻ div chứa danh sách video và trả về kết quả
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</div>';
    return $output;
}
add_shortcode( 'youtube_video_list', 'my_youtube_video_list_shortcode' );