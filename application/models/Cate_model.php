<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cate_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
  
  public function list_cate_gamezone(){
    $this->db->order_by('id', "desc");
    $this->db->where('id <=', 22); 
        $this->db->where('id >=', 7); 
        $query = $this->db->get('category');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
  }

  public function get_menu_home() {  
        $this->db->order_by('id', "desc");
        $this->db->limit(7);
        $query = $this->db->get('category');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function list_all() {  
        $this->db->order_by('id', "desc");
        $query = $this->db->get('category');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }
  
  public function list_fossbyte_cate(){
    $this->db->order_by('id', "desc");
    $this->db->where('id <=', 17); 
        $this->db->where('id >=', 11); 
        $query = $this->db->get('category');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
  }
    
  
  public function list_cate_arstech(){
    $this->db->where('id <=',9);
    $this->db->where('id >=',1);
    $query = $this->db->get('category');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
  }
    
  
    
    public function list_category() {
        $this->db->limit(20);
        $this->db->order_by('id', "desc");
        $query = $this->db->get('category');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function get_url($cateid) {
        $query = $this->db->get_where('category', array('id' => $cateid));
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                return $value->rootlink;
            }
        } else {
            return 0;
        }
    }

    public function insert($data) {
        $id = 0;
        $query = $this->db->get_where('category', array('slug' => $data['slug']));
        $result = $query->result();
        if (empty($result)) {
            $this->db->insert('category', array(
                'catename' => strtoupper($data['title']),
                'rootlink' => $data['root'],
                'catelink' => $data['catelink'], 
                'slug' => strtolower($data['slug']),
                'status' => 0,
                'active' => 1,
            ));
            $id = $this->db->insert_id();
            $this->db->trans_complete();
        } else {
            foreach ($query->result() as $row) {
                $id = $row->id;
            }
        }
        return $id;
    }

    public function update_status($cateid) {
        $data = array(
            'status' => 1,
        );
        $this->db->where('id', $cateid);
        $this->db->update('category', $data);
    }
     

} 
?>