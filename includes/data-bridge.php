<?php
/**
 * K86SHOP
 * File: includes/data-bridge.php
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class K86Shop_Data_Bridge {

	/**
	 * GitHub RAW JSON URL
	 * Đường dẫn RAW JSON thực tế kết nối kho dữ liệu K86SHOP-quanly
	 */
	const GITHUB_RAW_JSON = 'https://githubusercontent.com';

	/**
	 * Lấy dữ liệu Funnel theo Slug bài viết hiện tại.
	 *
	 * @return array
	 */
	public static function get_funnel_data_by_post() {

		$fallback = array(
			'status' => 'fallback',
		);

		$post_id = get_the_ID();

		if ( empty( $post_id ) ) {
			return $fallback;
		}

		$slug = get_post_field( 'post_name', $post_id );

		if ( empty( $slug ) ) {
			return $fallback;
		}

		$response = wp_remote_get(
			self::GITHUB_RAW_JSON,
			array(
				'timeout'   => 10,
				'sslverify' => true,
			)
		);

		if ( is_wp_error( $response ) ) {
			return $fallback;
		}

		$code = wp_remote_retrieve_response_code( $response );

		if ( 200 !== (int) $code ) {
			return $fallback;
		}

		$body = wp_remote_retrieve_body( $response );

		if ( empty( $body ) ) {
			return $fallback;
		}

		$data = json_decode( $body, true );

		if ( ! is_array( $data ) ) {
			return $fallback;
		}

		if ( ! array_key_exists( $slug, $data ) ) {
			return $fallback;
		}

		if ( ! is_array( $data[ $slug ] ) ) {
			return $fallback;
		}

		return $data[ $slug ];
	}
}
