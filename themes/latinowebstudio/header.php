<?php
echo '<!DOCTYPE html>';
echo '<html ';
language_attributes();
echo '>';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';

echo codeHeader();

wp_head(); 

echo '</head>';
echo '<body '; 
body_class(); 
echo '>';
echo codeBody();

echo '<div class="blank-space" style=""></div>';
echo '<header class="position-relative box-shadow bg-white w-100" style="top:0;left:0;z-index:100;padding-top:7.5px;">';

echo '<div class="nav">';
echo '<div class="container">';

echo '<div class="row align-items-center">';

echo '<div class="col-lg-3 col-md-4 col-8 text-center">';

echo '<div class="d-md-none" style="height:10px;"></div>';

echo '<a href="' . home_url() . '" title="Go back to the Home of Down to Earth Investments">';
echo '<div style="width:100%;pointer-events:none;" id="logoMain">';
// echo logoSVG();
echo wp_get_attachment_image(logoImg()['id'], 'full', false, array( 'alt' => get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ), 'style' => 'width:100%;height:auto;','class'=>'skip-lazy' ));
echo '</div>';
echo '</a>';
echo '</div>';

echo '<div class="col-lg-9 col-6 text-center mobile-hidden d-flex justify-content-end">';

wp_nav_menu(array(
    'menu' => 'Primary',
    'menu_class'=>'menu list-unstyled d-lg-flex h-100 align-items-center justify-content-end m-0'
));

echo '<a class="btn-main" href="/contact/" title="Get Cash for Your Land">Get Cash Offer</a>';

echo '</div>';

echo '<div class="col-lg-3 col-md-8 col-4 desktop-hidden order-3 d-flex align-items-center justify-content-end">';

echo '<div class="d-flex justify-content-end align-items-center">';

echo '<div>';
echo '<a id="mobileMenuToggle" class="openModalBtn nav-toggle" data-modal-id="mobileMenu" title="mobile menu nav toggle">';
echo '<div>';
echo '<div class="line-1 bg-accent-secondary"></div>';
echo '<div class="line-2 bg-accent-secondary"></div>';
echo '<div class="line-3 bg-accent-secondary"></div>';
echo '</div>';
echo '</a>';
echo '</div>';


echo '</div>';

echo '</div>';



echo '</div>';
echo '</div>';
echo '</div>';

echo '</header>';
?>