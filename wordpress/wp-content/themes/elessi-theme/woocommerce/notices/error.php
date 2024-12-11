<?php
/**
 * Login Form
 *
 * @author  NasaTheme
 * @package Elessi-theme/WooCommerce
 * @version 8.5.0
 */
if (!defined('ABSPATH')) :
    exit;
endif;

if (empty($notices) || !is_array($notices)) :
    return;
endif;
?>
<ul class="woocommerce-error is-error" role="alert">
    <?php foreach ($notices as $notice) : ?>
        <li<?php echo wc_get_notice_data_attr($notice); ?>>
            <?php echo wc_kses_notice($notice['notice']); ?>
        </li>
    <?php endforeach; ?>
</ul>
