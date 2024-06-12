<?php

/**
 * Title: Header Media
 * Slug: fse-cloths-rental/main-banner
 */

?>

<!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>","id":65,"dimRatio":50,"customOverlayColor":"#5a3e31","isUserOverlayColor":true,"minHeight":650,"minHeightUnit":"px","className":"alignfull sliderimg","layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-cover alignfull sliderimg" style="min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#5a3e31"></span><img class="wp-block-cover__image-background wp-image-65" alt="" src="<?php echo get_parent_theme_file_uri( '/assets/images/slider.png' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%","className":"slider-content-box"} -->
<div class="wp-block-column slider-content-box" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"40px"}},"textColor":"background","className":"main-heading"} -->
<h2 class="wp-block-heading has-text-align-left main-heading has-background-color has-text-color has-link-color" style="font-size:40px"><?php esc_html_e('Make Your First Impression By','fse-cloths-rental'); ?><br><?php esc_html_e('Renting All Types Of Clothes','fse-cloths-rental'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"color":{"text":"#c5c5c5"},"elements":{"link":{"color":{"text":"#c5c5c5"}}},"typography":{"fontSize":"16px","lineHeight":"2.3"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"className":"slider-text"} -->
<p class="slider-text has-text-color has-link-color" style="color:#c5c5c5;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);font-size:16px;line-height:2.3"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','fse-cloths-rental'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"secondary-bg-color","style":{"spacing":{"padding":{"left":"var:preset|spacing|70","right":"var:preset|spacing|70","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"7px"},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"16px"}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:16px;font-style:normal;font-weight:700"><a class="wp-block-button__link has-secondary-bg-color-background-color has-background wp-element-button" style="border-radius:7px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--70)"><?php esc_html_e('Search','fse-cloths-rental'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"circle-outer","layout":{"type":"constrained"}} -->
<div class="wp-block-group circle-outer"><!-- wp:group {"style":{"spacing":{"padding":{"top":"27px","bottom":"27px","left":"20px","right":"20px"}}},"backgroundColor":"secondary-bg-color","className":"discount-circle","layout":{"type":"constrained"}} -->
<div class="wp-block-group discount-circle has-secondary-bg-color-background-color has-background" style="padding-top:27px;padding-right:20px;padding-bottom:27px;padding-left:20px"><!-- wp:group {"className":"discount-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group discount-wrapper"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"15px"}},"className":"dsicount-text"} -->
<p class="has-text-align-center dsicount-text" style="font-size:15px"><?php esc_html_e('DISCOUNT','fse-cloths-rental'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"},"spacing":{"margin":{"top":"0"}}},"className":"dsicount-no"} -->
<p class="has-text-align-center dsicount-no" style="margin-top:0;font-size:25px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e('50 %','fse-cloths-rental'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"},"spacing":{"margin":{"top":"0"}}},"className":"off-text"} -->
<p class="has-text-align-center off-text" style="margin-top:0;font-size:25px;font-style:normal;font-weight:700;line-height:1.3"><?php esc_html_e('OFF','fse-cloths-rental'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"circle-text","layout":{"type":"constrained"}} -->
<div class="wp-block-group circle-text"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"12px"}},"fontFamily":"inter"} -->
<p class="has-inter-font-family" style="font-size:12px;font-style:normal;font-weight:400"><?php esc_html_e('Free Shipping On Or Above $99 Free Shipping On Or Above $99','fse-cloths-rental'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->