<?php

class shopHooktestPlugin extends shopPlugin
{
    
    public function hookFrontendCart()
    {
        return $this->hookContent('frontend_cart');
    }

    public function hookFrontendCategory()
    {
        return $this->hookContent('frontend_category', ['Num args'=>func_num_args(), 'args'=>json_encode(func_get_args())]);
    }

    public function hookFrontendCheckout()
    {
        return $this->hookContent('frontend_checkout');
    }
    
    public function hookFrontendError()
    {
        return $this->hookContent('frontend_error');
    }

    public function hookFrontendFooter()
    {
        return $this->hookContent('frontend_footer');
    }

    public function hookFrontendHead()
    {
        return '<!-- FRONTEND_HEAD -->';
    }

    public function hookFrontendHeader()
    {
        return $this->hookContent('frontend_header');
    }

    public function hookFrontendHomapage()
    {
        return $this->hookContent('frontend_homapage');
    }

    public function hookFrontendMy()
    {
        return $this->hookContent('frontend_my');
    }

    public function hookFrontendMyNav()
    {
        return $this->hookContent('frontend_my_nav');
    }

    public function hookFrontendNav()
    {
        return $this->hookContent('frontend_nav');
    }

    public function hookFrontendProduct()
    {
        return array(
            'menu' => $this->hookContent('frontend_product.menu'),
            'cart' => $this->hookContent('frontend_product.cart'),
            'block_aux' => $this->hookContent('frontend_product.block_aux'),
            'block' => $this->hookContent('frontend_product.block'),
        );
    }

    public function hookFrontendSearch()
    {
        return $this->hookContent('frontend_search');
    }

    private function hookContent($hook_name, $options=array()) {
        $view = waSystem::getInstance()->getView();
        $view->assign('hook_name', $hook_name);
        $view->assign('options', $options);
        
        $template = $this->path . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'hook_test.tpl';
        
        return $view->fetch($template);
    }
}