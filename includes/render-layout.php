<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
|--------------------------------------------------------------------------
| DEBUG - HIỂN THỊ SLUG & DỮ LIỆU GITHUB
|--------------------------------------------------------------------------
*/

$current_post_id = get_the_ID();
$current_slug    = get_post_field( 'post_name', $current_post_id );
$funnel_data     = K86Shop_Data_Bridge::get_funnel_data_by_post();

echo '<div style="background:#fff3cd;border:2px solid #f0ad4e;padding:15px;margin:20px 0;font-family:monospace;font-size:14px;">';

echo '<strong>Slug hiện tại của bài viết trên Web là:</strong> ';
echo esc_html( $current_slug );

echo '<hr>';

echo '<strong>Dữ liệu lấy từ GitHub về là:</strong>';
echo '<pre>';
print_r( $funnel_data );
echo '</pre>';

echo '</div>';

/*
|--------------------------------------------------------------------------
| PHẦN CODE RENDER GIAO DIỆN GIỮ NGUYÊN BÊN DƯỚI
|--------------------------------------------------------------------------
*/
