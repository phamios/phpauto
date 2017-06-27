<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url'); 
        $this->load->library('pagination'); 
        $this->load->helper('cookie');
        $this->load->helper('text'); 
        $this->load->helper(array('form', 'url')); 
        $this->load->helper(array('javelin'));
        $this->load->helper(array('slug')); 
        date_default_timezone_set('UTC');
        $this->load->model('cate_model');
        $this->load->model('content_model');
    }

    public function index() {  
        $data['feed_post'] = $this->content_model->load_news_post_slide();
        $data['lastest_post'] = $this->content_model->load_lastest_post();
        $data['list_categories'] = $this->cate_model->get_menu_home();
        $data['listmenu'] = $this->cate_model->list_all();
        $data['get_new_post_slide'] = $this->content_model->load_newpost_slide();
        $data['popular'] = $this->content_model->get_popular();
        $data['list_tag'] = $this->cate_model->list_all();
        $data['random_post'] = $this->content_model->random_post();
        $data['topcontent'] = $this->content_model->get_top_news();
        $current_link = site_url('home/index');
        $total_row = $this->content_model->total();
        $per_page = 16;
        $data['paging'] = $this->paging($current_link,$per_page,$total_row);
        $data['maincontents'] = $this->content_model->list_all_by_page($per_page,$this->uri->segment(3));//$this->content_model->get_main_new_post();
        
        $this->load->view('home/index', $data);
    }
    
    public function paging($current_link = null,$per_page = 0,$total_row = null){
        $config['base_url'] = $current_link;
        $config['total_rows'] = $total_row; //$this->news_model->total();
        $config['per_page'] = $per_page;
        $config['num_links'] = 5;
        
    
        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div><!--pagination-->';

        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<span class="prev page">';
        $config['first_tag_close'] = '</span>';

        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<span class="next page">';
        $config['last_tag_close'] = '</span>';

        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<span class="next page">';
        $config['next_tag_close'] = '</span>';

        $config['prev_link'] = '&larr; Previous';
        $config['prev_tag_open'] = '<span class="prev page">';
        $config['prev_tag_close'] = '</span>';

        $config['cur_tag_open'] = '<a href="">';
        $config['cur_tag_close'] = '</a>';
 
        $this->pagination->initialize($config);
        return $this->pagination->create_links();
  }
  
  
    public function ajax_content(){
        $this->load->model('homecate_model');
        $data['list_homecate'] = $this->homecate_model->list_home_cate();
    }
    
    
    
    public function details($id){
        // $id = (int) end(explode("-", uri_string())); 
        $data['feed_post'] = $this->content_model->load_news_post_slide();
        $data['lastest_post'] = $this->content_model->load_lastest_post();
        $data['list_categories'] = $this->cate_model->get_menu_home();
        $data['listmenu'] = $this->cate_model->list_all();
        $data['get_new_post_slide'] = $this->content_model->load_newpost_slide();
        $data['popular'] = $this->content_model->get_popular();
        $data['list_tag'] = $this->cate_model->list_all();
        $data['random_post'] = $this->content_model->random_post();
        $data['topcontent'] = $this->content_model->get_top_news();
        $data['rand_next_posts'] = $this->content_model->get_random_new_post();
        $a = explode('-', $id);
        $action = array_pop($a);
        $target = explode(".", $action);
        $id = $target[0];
  
        $this->content_model->update_view($id);
        
        $data['content_details'] = $this->content_model->get_details($id);

        $this->load->view('home/index', $data);
    }
    
    public function category($link=null,$id=null){
        $data['feed_post'] = $this->content_model->load_news_post_slide();
        $data['lastest_post'] = $this->content_model->load_lastest_post();
        $data['list_categories'] = $this->cate_model->get_menu_home();
        $data['listmenu'] = $this->cate_model->list_all();
        $data['get_new_post_slide'] = $this->content_model->load_newpost_slide();
        $data['popular'] = $this->content_model->get_popular();
        $data['list_tag'] = $this->cate_model->list_all();
        $data['random_post'] = $this->content_model->random_post();
        $data['topcontent'] = $this->content_model->get_top_news();
        $a = explode('-', $id);
        $action = array_pop($a);
        $target = explode(".", $action);
        $id = $target[0]; 
     
        $current_link = site_url('home/category');
        $total_row = $this->content_model->total_cate($id);

        $per_page = 16;
        $data['paging'] = $this->paging($current_link,$per_page,$total_row);
       
        $data['cate_post'] = $this->content_model->list_categories_page($id,$per_page,$this->uri->segment(3));
         
        $this->load->view('home/index',$data);
    }

}
