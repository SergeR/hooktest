<?php

return array(
    'name' => /*_wp*/('Hook Tests'),
    'description' => /*_wp*/('Storefront’s Hooks displayed as green blocks'),
    'vendor'=>670917,
    'version'=>'1.0',
    'shop_settings' => FALSE,
    'frontend'    => true,
    'handlers' => array(
        'frontend_cart' => 'hookFrontendCart',
        'frontend_category' => 'hookFrontendCategory',
        'frontend_checkout' => 'hookFrontendCheckout',
        'frontend_error' => 'hookFrontendError',
        'frontend_footer' => 'hookFrontendFooter',
        'frontend_head' => 'hookFrontendHead',
        'frontend_header' => 'hookFrontendHeader',
        'frontend_homapage' => 'hookFrontendHomapage',
        'frontend_my' => 'hookFrontendMy',
        'frontend_my_nav' => 'hookFrontendMyNav',
        'frontend_nav' => 'hookFrontendNav',
        'frontend_product' => 'hookFrontendProduct',
        'frontend_search' => 'hookFrontendSearch',
//        'sitemap' => 'sitemap'
    ),
);
//EOF
