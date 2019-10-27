<?php

/**
 * Storefront template functions.
 *
 * @package storefront
 */

if (!function_exists('storefront_site_branding')) {
  /**
   * Site branding wrapper and display
   *
   * @since  1.0.0
   * @return void
   */
  function storefront_site_branding()
  {
    ?>
    <div class="site-branding">
      <?php storefront_site_title_and_logo(); ?>
    </div>
<?php
  }
}

if (!function_exists('storefront_site_title_and_logo')) {
  /**
   * Display the site title and logo
   *
   * @since 2.1.0
   * @param bool $echo Echo the string or return it.
   * @return string
   */
  function storefront_site_title_and_logo($echo = true)
  {
    // if (function_exists('the_custom_logo') && has_custom_logo()) {

    // $logo = get_custom_logo();
    $tag = is_home() ? 'h1' : 'div';

    $html = '<' . esc_attr($tag) . ' class="beta site-title"><a href="' . esc_url(home_url('/')) . '" rel="home">' . esc_html(get_bloginfo('name')) . '</a></' . esc_attr($tag) . '>';

    // $html += is_home() ? '<h1 class="logo">' . $logo . '</h1>' : $logo;


    // No Description
    // if ( '' !== get_bloginfo( 'description' ) ) {
    // 	$html .= '<p class="site-description">' . esc_html( get_bloginfo( 'description', 'display' ) ) . '</p>';
    // }
    // }

    if (!$echo) {
      return $html;
    }

    echo $html; // WPCS: XSS ok.
  }
}
