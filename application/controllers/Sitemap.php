<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {

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
  
  public function index(){
    $data['categories'] = $this->cate_model->list_all();
    
    $current_link = site_url('sitemap/index');
        $total_row = $this->content_model->total();
        $per_page = 500;
        $data['paging'] = $this->paging($current_link,$per_page,$total_row);
        $data['maincontents'] = $this->content_model->list_all_by_page($per_page,$this->uri->segment(3));//$this
    
     
    $this->load->view('home/sitemap',$data);
  }
  
   public function paging($current_link = null,$per_page = 0,$total_row = null){
        $config['base_url'] = $current_link;
        $config['total_rows'] = $total_row; //$this->news_model->total();
        $config['per_page'] = $per_page;
        $config['num_links'] = 50;
        
    
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
  
  
}