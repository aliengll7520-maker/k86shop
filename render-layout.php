<?php
/**
 * File: render-layout.php
 * Layout 2 cột Frontend Funnel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Anti-Crash
if ( empty( $funnel_data ) || ! is_array( $funnel_data ) ) {
	return;
}
?>

<div class="k86-funnel-layout">

	<!-- LEFT COLUMN -->
	<main class="k86-main-column">

		<?php
		// Hero / Tiêu đề
		if ( ! empty( $funnel_data['hero'] ) ) {
			echo $funnel_data['hero'];
		}

		// Nội dung mở đầu
		if ( ! empty( $funnel_data['intro'] ) ) {
			echo $funnel_data['intro'];
		}

		// Mục lục
		if ( ! empty( $funnel_data['toc'] ) ) {
			echo $funnel_data['toc'];
		}

		// Timeline / Lịch trình
		if ( ! empty( $funnel_data['timeline'] ) ) {
			echo $funnel_data['timeline'];
		}

		// Nội dung bài viết
		if ( ! empty( $funnel_data['content'] ) ) {
			echo $funnel_data['content'];
		}

		// Slider sản phẩm
		if ( ! empty( $funnel_data['product_slider'] ) ) {
			echo $funnel_data['product_slider'];
		}

		// Flash Sale
		if ( ! empty( $funnel_data['flash_sale'] ) ) {
			echo $funnel_data['flash_sale'];
		}

		// FAQ
		if ( ! empty( $funnel_data['faq'] ) ) {
			echo $funnel_data['faq'];
		}
		?>

	</main>

	<!-- RIGHT COLUMN -->
	<aside class="k86-sidebar">

		<?php
		// Sản phẩm nổi bật
		if ( ! empty( $funnel_data['featured_product'] ) ) {
			echo $funnel_data['featured_product'];
		}

		// Countdown
		if ( ! empty( $funnel_data['countdown'] ) ) {
			echo $funnel_data['countdown'];
		}

		// Bài viết liên quan
		if ( ! empty( $funnel_data['related_posts'] ) ) {
			echo $funnel_data['related_posts'];
		}

		// Tags
		if ( ! empty( $funnel_data['tags'] ) ) {
			echo $funnel_data['tags'];
		}

		// Chia sẻ
		if ( ! empty( $funnel_data['share'] ) ) {
			echo $funnel_data['share'];
		}
		?>

	</aside>

</div>
