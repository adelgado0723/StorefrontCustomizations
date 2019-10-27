<?php

/**
 * WooCommerce Template Functions.
 *
 * @package storefront
 */
if (!function_exists('storefront_product_search')) {
  /**
   * Display Product Search
   *
   * @since  1.0.0
   * @uses  storefront_is_woocommerce_activated() check if WooCommerce is activated
   * @return void
   */
  function storefront_product_search()
  {
    if (function_exists('the_custom_logo') && has_custom_logo()) {

      $logo = get_custom_logo();
    }
    // <!-- $logo -->
    ?>
    <a href="http://ultimateentrylevelmanual.com/" rel="home"> <img src="http://ultimateentrylevelmanual.com/wp-content/uploads/2019/09/cropped-FullColor_IconOnly_1024x1024_72dpi-4.jpg" class="custom-logo" alt="The Ultimate Entry Level Operative Manual" srcset="http://ultimateentrylevelmanual.com/wp-content/uploads/2019/09/cropped-FullColor_IconOnly_1024x1024_72dpi-4.jpg 1024w, http://ultimateentrylevelmanual.com/wp-content/uploads/2019/09/cropped-FullColor_IconOnly_1024x1024_72dpi-4-150x150.jpg 150w, http://ultimateentrylevelmanual.com/wp-content/uploads/2019/09/cropped-FullColor_IconOnly_1024x1024_72dpi-4-300x300.jpg 300w, http://ultimateentrylevelmanual.com/wp-content/uploads/2019/09/cropped-FullColor_IconOnly_1024x1024_72dpi-4-768x768.jpg 768w, http://ultimateentrylevelmanual.com/wp-content/uploads/2019/09/cropped-FullColor_IconOnly_1024x1024_72dpi-4-324x324.jpg 324w, http://ultimateentrylevelmanual.com/wp-content/uploads/2019/09/cropped-FullColor_IconOnly_1024x1024_72dpi-4-416x416.jpg 416w, http://ultimateentrylevelmanual.com/wp-content/uploads/2019/09/cropped-FullColor_IconOnly_1024x1024_72dpi-4-100x100.jpg 100w"></a>
<?php
  }
}
