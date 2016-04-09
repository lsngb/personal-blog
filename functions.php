<?php
/**
 * Custom template tags for this theme.
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package    Bulan Child
 * @author     Theme Junkie
 * @copyright  Copyright (c) 2015 - 2016, Theme Junkie
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 * @since      1.0.0
 */

/**
 * Site branding for the site.
 *
 * Display site title by default, but user can change it with their custom logo.
 * They can upload it on Customizer page.
 *
 * @since  1.0.0
 */
function bulan_site_branding() {

	// Get the customizer value.
	$prefix  = 'bulan-';
	$logo_id = bulan_mod( $prefix . 'logo' );

	// Check if logo available, then display it.
	if ( $logo_id ) :
		echo '<div id="logo" itemscope itemtype="http://schema.org/Brand">' . "\n";
			echo '<a href="' . esc_url( get_home_url() ) . '" itemprop="url" rel="home">' . "\n";
				echo '<img itemprop="logo" src="' . esc_url( wp_get_attachment_url( $logo_id ) ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" />' . "\n";
			echo '</a>' . "\n";
		echo '</div>' . "\n";

	// If not, then display the Site Title and Site Description.
	elseif ( display_header_text() ) :
		$site_description = get_bloginfo( 'description' );
		$temp="<span style='background-color:#757575;font-size:14px;;color:#F1F1F1;padding: 4px 12px;letter-spacing: 1px;'>".$site_description."</span>";
		echo '<div id="logo">'. "\n";
			echo '<h1 class="site-title" ' . hybrid_get_attr( 'site-title' ) . '><a style="background-color:#d6d6d6;" href="' . esc_url( get_home_url() ) . '" itemprop="url" rel="home"><span itemprop="headline">' . esc_attr( get_bloginfo( 'name' ) ) . '</span></a></h1>'. "\n".$temp;
		echo '</div>'. "\n";
	endif;

}
?>