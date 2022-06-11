<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    // public $category_name;
    // public $product_name;
    // public $product_id;
    // $category_name, $product_name='', $product_id=''


    function __construct()
    {
        parent::__construct();

        $this->load->model('Model_common');
        $this->load->model('Model_service');
        $this->load->model('Model_testimonial');
        $this->load->model('Model_tag');
        $this->load->model('shop/Model_shopping_cart');
        $this->load->model('Model_photo_gallery');

        $this->load->library('cart');
        $this->load->library('slug');
        $this->load->library('set_store_url');
        
        $this->lang->load('file', $this->session->userdata('site_language') ?? $this->session->userdata('store_language'));

        
    }

    public function index($category_name, $product_name, $product_id)
    {  
        $data['setting'] = $this->Model_common->all_setting();
        $data['page_home'] = $this->Model_common->all_page_home();
        $data['page_about'] = $this->Model_common->all_page_about();
        $data['comment'] = $this->Model_common->all_comment();
        $data['socials'] = $this->Model_common->all_social();

        $land_id = $this->session->userdata('land_id');
        $store_id = $this->session->userdata('store_id');
        
        $store_lang_data = $this->session->userdata('store_language');
        
        $data['store_currency_icon'] = $this->session->userdata('currency_icon');
        $data['store_currency_code'] = $this->session->userdata('currency_code');

        $data['product'] = $this->Model_shopping_cart->get_single_product($product_id, $store_lang_data);
        $data['product_photos'] = $this->Model_shopping_cart->get_multiple_product_photos($product_id);
        $data['product_photo'] = $this->Model_shopping_cart->get_single_product_photo($product_id);
        $data['category'] = $this->Model_shopping_cart->get_single_category($data['product']['category_id'], $store_lang_data);
        $data['category_photos'] = $this->Model_shopping_cart->all_product_category_photo();
        $data['category_id'] = $data['product']['category_id'];

        //for header and menu (all data)
        $data['product_categories'] = $this->Model_shopping_cart->all_product_category($store_lang_data);
        $data['product_category_photo'] = $this->Model_shopping_cart->all_product_category_photo();

        $data['tags'] = $this->Model_tag->all_tag();
        // if($data['product']){
        //     print_r($data['product']);
        //     exit('urun var');
        // } else {
        //     print_r($data['product']);
        //     exit('urun yok');
        // }
        $data['product']['meta_description'] ?: $data['product']['meta_description'] = 'Plus Reklamcilik, '.$data['product']['category_name'] .' - '. $data['product']['product_name'];
        $data['product']['meta_keyword'] ?: $data['product']['meta_keyword'] = 'Plus Reklamcilik, ' . $data['product']['category_name'] .' - '. $data['product']['product_name'];
        $data['product']['meta_title'] ?: $data['product']['meta_title'] = 'Plus Reklamcilik - ' . $data['product']['category_name'] .' - '. $data['product']['product_name'];

        $data['theme'] = $data['setting']['layout'];
    
        $this->load->view('layout/' . $data['setting']['layout'] . '/view_header', $data);
        if ($data['setting']['website_status_frontend'] === 'Active' || in_array($this->session->userdata('role'), ['Superadmin', 'Admin'])) {
            $this->load->view('layout/' . $data['setting']['layout'] . '/shop/view_shop_product', $data);
        } else {
            $this->load->view('view_maintenance', $data);
        }
        $this->load->view('layout/' . $data['setting']['layout'] . '/view_footer', $data);
    }

    public function category($category_name, $category_id)
    {
        $data['setting'] = $this->Model_common->all_setting();
        $data['socials'] = $this->Model_common->all_social();

        $store_lang_data = $this->session->userdata('store_language');

        //for header and menu (all data)
        $data['product_categories'] = $this->Model_shopping_cart->all_product_category($store_lang_data);
        $data['product_category_photo'] = $this->Model_shopping_cart->all_product_category_photo();

        $data['products'] = $this->Model_shopping_cart->get_product_with_category_id($category_id, $store_lang_data);
        $data['category'] = $this->Model_shopping_cart->get_single_category($category_id, $store_lang_data);
        $data['category_photos'] = $this->Model_shopping_cart->all_product_category_photo();
        $data['testimonials'] = $this->Model_testimonial->all_testimonial();
        $data['category_id'] = $category_id;

        $data['photo_gallery'] = $this->Model_photo_gallery->all_photo();

        $data['photo_gallery_wedding'] = [];
        $data['photo_gallery_products'] = [];
        
        foreach($data['photo_gallery'] as $row){
            if($row['favorite'] == 1) {
                if($row['tag'] === 'wedding'){
                    if(count($data['photo_gallery_wedding']) <= 10)
                    $data['photo_gallery_wedding'][] = $row;
                }
                if($row['tag'] === 'products'){
                    if(count($data['photo_gallery_products']) <= 10)
                    $data['photo_gallery_products'][] = $row;
                }
            }
        }
        
        $data['category']['meta_description'] ?: $data['category']['meta_description'] = $data['category']['category_name'];
        $data['category']['meta_keyword'] ?: $data['category']['meta_keyword'] = $data['category']['category_name'];
        $data['category']['meta_title'] ?: $data['category']['meta_title'] = $data['category']['category_name'];

        $data['slug'] = $this->slug;
        $data['theme'] = $data['setting']['layout'];

        $this->load->view('layout/' . $data['setting']['layout'] . '/view_header', $data);
        if ($data['setting']['website_status_frontend'] === 'Active' || in_array($this->session->userdata('role'), ['Superadmin', 'Admin'])) {
            $this->load->view('layout/' . $data['setting']['layout'] . '/shop/view_shop_product_category', $data);
        } else {
            $this->load->view('view_maintenance', $data);
        }
        $this->load->view('layout/' . $data['setting']['layout'] . '/view_footer', $data);
        
        // exit(json_encode(array('product' => $this->Model_shopping_cart->get_product_with_category_id($this->input->post('category_id'), "de"))));
    }
    
    
    public function quickview($category_id)
    {
        $data['setting'] = $this->Model_common->all_setting();
        $data['social'] = $this->Model_common->all_social();
        $data['products'] = $this->Model_shopping_cart->get_product_with_category_id($category_id, "de");
        $data['category'] = $this->Model_shopping_cart->get_single_category($category_id);
        $data['category_photos'] = $this->Model_shopping_cart->all_product_category_photo();
        $data['testimonials'] = $this->Model_testimonial->all_testimonial();
        $data['category_id'] = $category_id;
        
        $data['theme'] = $data['setting']['layout'];
        // echo $this->load->view('layout/' . $data['setting']['layout'] . '/ajax/view_quickview', $data, true);

        // $this->lang->load('file', $this->session->userdata('store_language') ?? 'de' );

        $this->load->view('layout/' . $data['setting']['layout'] . '/view_header', $data);
        if ($data['setting']['website_status_frontend'] === 'Active' || in_array($this->session->userdata('role'), ['Superadmin', 'Admin'])) {
            $this->load->view('layout/' . $data['setting']['layout'] . '/shop/view_shop_product', $data);
        } else {
            $this->load->view('view_maintenance', $data);
        }
        $this->load->view('layout/' . $data['setting']['layout'] . '/view_footer', $data);
        
        // exit(json_encode(array('product' => $this->Model_shopping_cart->get_product_with_category_id($this->input->post('category_id'), "de"))));
    }
    
    
    public function quickview_old($category_id)
    {
        $data['setting'] = $this->Model_common->all_setting();
        $data['theme'] = $data['setting']['layout'];
        $data['products'] = $this->Model_shopping_cart->get_product_with_category_id($category_id, "de");
        $data['category'] = $this->Model_shopping_cart->get_single_category($category_id);
        $data['category_photos'] = $this->Model_shopping_cart->all_product_category_photo();
        $data['category_id'] = $category_id;

        echo $this->load->view('layout/' . $data['setting']['layout'] . '/ajax/view_quickview', $data, true);
        
        // exit(json_encode(array('product' => $this->Model_shopping_cart->get_product_with_category_id($this->input->post('category_id'), "de"))));
    }
}
