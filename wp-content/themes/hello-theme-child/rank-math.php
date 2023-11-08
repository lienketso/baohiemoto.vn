<?php

/** Cài meta keyword */
add_filter( 'rank_math/frontend/show_keywords', '__return_true');
/** Xóa thẻ meta next page/2/ danh mục sản phẩm */
add_filter( 'rank_math/frontend/disable_adjacent_rel_links', '__return_true' );
/** Xóa schema tác giả mặc định của bài viết hoặc sản phẩm */
add_filter( 'rank_math/json_ld', function( $entities, $jsonld ) {
    if ( isset( $entities['ProfilePage'] ) ) {
        $id = $entities['ProfilePage']['@id'];
        foreach ( $entities as $key => $entity ) {
            if ( isset( $entity['author' ]['@id'] ) && $id === $entity['author' ]['@id'] ) {
                unset( $entities[ $key ]['author'] );
            }
        }
        unset( $entities['ProfilePage'] );
    }
    return $entities;
}, 999, 2 );
/** Canonical *Chưa phân tích được là gì* */
add_filter( 'rank_math/frontend/canonical', function( $canonical ) {
	return $canonical;
});
/** Chống spam link comment */
remove_filter('comment_text', 'make_clickable', 9);