<?php
/**
 * File: includes/render-widgets.php
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Timeline Tabs
 */
function k86shop_render_timeline( $timeline_data = array() ) {

	if ( empty( $timeline_data ) || ! is_array( $timeline_data ) ) {
		return;
	}

	?>
	<div class="k86shop-timeline">

		<div class="k86shop-timeline-tabs">

			<?php
			$i = 0;

			foreach ( $timeline_data as $day ) :

				if ( empty( $day ) || ! is_array( $day ) ) {
					continue;
				}

				$active = ( $i === 0 ) ? ' active' : '';
				$title  = ! empty( $day['title'] ) ? $day['title'] : '';

				if ( empty( $title ) ) {
					$title = 'Ngày ' . ( $i + 1 );
				}
				?>

				<button
					type="button"
					class="k86shop-tab-button<?php echo esc_attr( $active ); ?>"
					data-tab="k86shop-day-<?php echo esc_attr( $i ); ?>">
					<?php echo esc_html( $title ); ?>
				</button>

				<?php
				$i++;
			endforeach;
			?>

		</div>

		<div class="k86shop-timeline-content">

			<?php
			$i = 0;

			foreach ( $timeline_data as $day ) :

				if ( empty( $day ) || ! is_array( $day ) ) {
					continue;
				}

				$active  = ( $i === 0 ) ? ' active' : '';
				$content = ! empty( $day['content'] ) ? $day['content'] : '';
				?>

				<div
					id="k86shop-day-<?php echo esc_attr( $i ); ?>"
					class="k86shop-tab-panel<?php echo esc_attr( $active ); ?>">

					<?php echo wp_kses_post( $content ); ?>

				</div>

				<?php
				$i++;
			endforeach;
			?>

		</div>

	</div>
	<?php
}

/**
 * Sidebar Product
 */
function k86shop_render_sidebar_product( $product_data = array() ) {

	if ( empty( $product_data ) || ! is_array( $product_data ) ) {
		return;
	}

	$image    = ! empty( $product_data['image'] ) ? $product_data['image'] : '';
	$name     = ! empty( $product_data['name'] ) ? $product_data['name'] : '';
	$price    = ! empty( $product_data['price'] ) ? $product_data['price'] : '';
	$old      = ! empty( $product_data['old_price'] ) ? $product_data['old_price'] : '';
	$discount = ! empty( $product_data['discount'] ) ? $product_data['discount'] : '';

	if ( empty( $name ) ) {
		return;
	}

	?>
	<div class="k86shop-sidebar-product">

		<?php if ( ! empty( $image ) ) : ?>
			<div class="k86shop-product-image">
				<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $name ); ?>">
			</div>
		<?php endif; ?>

		<div class="k86shop-product-name">
			<?php echo esc_html( $name ); ?>
		</div>

		<div class="k86shop-product-price">

			<?php if ( ! empty( $price ) ) : ?>
				<span class="k86shop-price-current">
					<?php echo esc_html( $price ); ?>
				</span>
			<?php endif; ?>

			<?php if ( ! empty( $old ) ) : ?>
				<span class="k86shop-price-old">
					<?php echo esc_html( $old ); ?>
				</span>
			<?php endif; ?>

			<?php if ( ! empty( $discount ) ) : ?>
				<span class="k86shop-price-discount">
					<?php echo esc_html( $discount ); ?>
				</span>
			<?php endif; ?>

		</div>

		<div class="k86shop-product-buttons">

			<?php
			$stores = array(
				'shopee' => 'Shopee',
				'tiktok' => 'TikTok Shop',
				'lazada' => 'Lazada',
				'amazon' => 'Amazon',
			);

			foreach ( $stores as $key => $label ) :

				$link = ! empty( $product_data[ $key ] ) ? $product_data[ $key ] : '';

				if ( empty( $link ) ) {
					continue;
				}
				?>

				<a
					class="k86shop-store-button"
					href="<?php echo esc_url( $link ); ?>"
					target="_blank"
					rel="nofollow noopener">

					<?php echo esc_html( $label ); ?>

				</a>

			<?php endforeach; ?>

		</div>

	</div>
	<?php
}

/**
 * Countdown
 */
function k86shop_render_countdown( $countdown_data = array() ) {

	if ( empty( $countdown_data ) || ! is_array( $countdown_data ) ) {
		return;
	}

	$end_time = ! empty( $countdown_data['end_time'] ) ? $countdown_data['end_time'] : '';

	if ( empty( $end_time ) ) {
		return;
	}

	$link = ! empty( $countdown_data['link'] ) ? $countdown_data['link'] : '#';

	?>
	<div
		class="k86shop-countdown"
		data-end-time="<?php echo esc_attr( $end_time ); ?>">

		<div class="k86shop-countdown-box">
			<div class="k86shop-time-item">
				<span class="k86shop-day">00</span>
				<small>Ngày</small>
			</div>

			<div class="k86shop-time-item">
				<span class="k86shop-hour">00</span>
				<small>Giờ</small>
			</div>

			<div class="k86shop-time-item">
				<span class="k86shop-minute">00</span>
				<small>Phút</small>
			</div>

			<div class="k86shop-time-item">
				<span class="k86shop-second">00</span>
				<small>Giây</small>
			</div>
		</div>

		<a
			class="k86shop-countdown-button"
			href="<?php echo esc_url( $link ); ?>">

			Xem ưu đãi ngay

		</a>

	</div>
	<?php
}
