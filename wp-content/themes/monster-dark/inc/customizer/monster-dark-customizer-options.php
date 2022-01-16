<?php
/**
 * Customizer section options.
 *
 * @package monster_dark
 *
 */

function monster_dark_customizer_theme_settings( $wp_customize ){
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
		
		$wp_customize->add_setting(
			'designexo_footer_copright_text',
			array(
				'sanitize_callback' =>  'monster_dark_sanitize_text',
				'default' => __('Copyright &copy; 2021 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Monster Dark theme by <a target="_blank" href="//themearile.com/">ThemeArile</a>', 'monster-dark'),
				'transport'         => $selective_refresh,
			)	
		);
		$wp_customize->add_control('designexo_footer_copright_text', array(
				'label' => esc_html__('Footer Copyright','monster-dark'),
				'section' => 'designexo_footer_copyright',
				'priority'        => 10,
				'type'    =>  'textarea'
		));

}
add_action( 'customize_register', 'monster_dark_customizer_theme_settings' );

function monster_dark_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
}