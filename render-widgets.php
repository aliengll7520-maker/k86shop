<?php
/**
 * File: render-widgets.php
 * Widget Render Functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * ==========================================================
 * MỤC LỤC
 * ==========================================================
 */
function k86shop_render_toc( $items = array() ) {

	if ( empty( $items ) || ! is_array( $items ) ) {
		return;
	}

	?>
	<div class="k86-widget k86-toc">
		<div class="k86-widget-title">
			Mục lục nội dung
		</div>

		<ol class="k86-toc-list">
			<?php foreach ( $items as $item ) :

				if ( empty( $item['id'] ) || empty( $item['title'] ) ) {
					continue;
				}
				?>
				<li>
					<a href="#<?php echo esc_attr( $item['id'] ); ?>">
						<?php echo esc_html( $item['title'] ); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ol>
	</div>
	<?php
}

/**
 * ==========================================================
 * LỊCH TRÌNH TAB NGÀY
 * ==========================================================
 */
function k86shop_render_timeline( $days = array() ) {

	if ( empty( $days ) || ! is_array( $days ) ) {
		return;
	}

	$index = 0;
	?>

	<div class="k86-widget k86-timeline">

		<div class="k86-timeline-tabs">

			<?php foreach ( $days as $day ) :

				if ( empty( $day['title'] ) ) {
					continue;
				}

				$active = ( $index === 0 ) ? ' active' : '';
				?>

				<button
					type="button"
					class="k86-tab-button<?php echo esc_attr( $active ); ?>"
					data-tab="k86-day-<?php echo esc_attr( $index ); ?>">

					<?php echo esc_html( $day['title'] ); ?>

				</button>

				<?php $index++; ?>

			<?php endforeach; ?>

		</div>

		<div class="k86-timeline-panels">

			<?php

			$index = 0;

			foreach ( $days as $day ) :

				$active = ( $index === 0 ) ? ' active' : '';
				?>

				<div
					id="k86-day-<?php echo esc_attr( $index ); ?>"
					class="k86-tab-panel<?php echo esc_attr( $active ); ?>">

					<?php
					if ( ! empty( $day['items'] ) && is_array( $day['items'] ) ) :
						?>
						<ul class="k86-day-list">

							<?php foreach ( $day['items'] as $task ) : ?>

								<li>
									<?php echo esc_html( $task ); ?>
								</li>

							<?php endforeach; ?>

						</ul>

					<?php endif; ?>

				</div>

				<?php

				$index++;

			endforeach;

			?>

		</div>

	</div>

	<?php
}

/**
 * ==========================================================
 * ĐỒNG HỒ ĐẾM NGƯỢC
 * ==========================================================
 */
function k86shop_render_countdown( $data = array() ) {

	if ( empty( $data ) || ! is_array( $data ) ) {
		return;
	}

	$end = ! empty( $data['end_time'] ) ? $data['end_time'] : '';

	if ( empty( $end ) ) {
		return;
	}

	$title  = ! empty( $data['title'] ) ? $data['title'] : 'Ưu đãi sắp kết thúc';
	$button = ! empty( $data['button'] ) ? $data['button'] : 'Xem ngay';
	$link   = ! empty( $data['link'] ) ? $data['link'] : '#';

	?>

	<div
		class="k86-widget k86-countdown"
		data-countdown="<?php echo esc_attr( $end ); ?>">

		<div class="k86-widget-title">
			<?php echo esc_html( $title ); ?>
		</div>

		<div class="k86-countdown-box">

			<div class="k86-time">
				<span class="k86-day">00</span>
				<small>Ngày</small>
			</div>

			<div class="k86-time">
				<span class="k86-hour">00</span>
				<small>Giờ</small>
			</div>

			<div class="k86-time">
				<span class="k86-minute">00</span>
				<small>Phút</small>
			</div>

			<div class="k86-time">
				<span class="k86-second">00</span>
				<small>Giây</small>
			</div>

		</div>

		<a
			class="k86-countdown-button"
			href="<?php echo esc_url( $link ); ?>">

			<?php echo esc_html( $button ); ?>

		</a>

	</div>

	<?php
}
