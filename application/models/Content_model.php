<?php

date_default_timezone_set('America/Los_Angeles');
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Content_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function get_top_news(){
        $this->db->limit(5);
        $this->db->order_by('total_view',"desc");
        $query = $this->db->get('content');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }
    
    public function get_content_bycate($cateid = null){
        $this->db->limit(10);
        $this->db->order_by('cateid', "desc");
        $query = $this->db->get('content');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function get_all_post() {
        $this->db->order_by('id', "desc");
        $query = $this->db->get('content');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function get_main_new_post() {
        $this->db->limit(10);
        $this->db->order_by('id', "desc");
        $query = $this->db->get('content');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function get_random_new_post() {
        $this->db->limit(12);
        $this->db->order_by('id', "random");
        $query = $this->db->get('content');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function random_post() {
        $this->db->order_by('id', 'random');
        $this->db->limit(10);
        $query = $this->db->get('content');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function list_categories($cateid = null) {
        $this->db->limit(10);
        $this->db->order_by('id', "desc");
        $this->db->where('cateid', $cateid);
        $query = $this->db->get('content');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function load_lastest_post() {
        $this->db->limit(12);
        $this->db->order_by('id', "desc");
        $query = $this->db->get('content');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function load_newpost_slide() {
        $this->db->limit(3);
        $this->db->order_by('id', "desc");
        $query = $this->db->get('content');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function get_details($id = null) {
        $this->db->where('id', $id);
        $query = $this->db->get('content');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function load_news_post_slide() {
        $this->db->limit(5);
        $this->db->order_by('id', "desc");
        $query = $this->db->get('content');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function get_current_view($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('content');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $view) {
                echo ">> " + $view->total_view;
                return $view->total_view;
            }
        } else {
            return 0;
        }
    }

    public function update_view($id = null) {
        $current = $this->get_current_view($id) + 1;

        $data = array(
            'total_view' => $current,
        );
        $this->db->where('id', $id);
        $this->db->update('content', $data);
    }

    public function get_popular() {
        $this->db->limit(8);
        $this->db->order_by('total_view', "desc");

        $query = $this->db->get('content');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return 0;
        }
    }

    public function insert($data) {
        $id = 0;
        $query = $this->db->get_where('content', array('slug' => $data['slug']));
        $result = $query->result();
        if (empty($result)) {
            $this->db->insert('content', array(
                'cateid' => strtolower($data['cateid']),
                'title' => $data['title'],
                'image_thumb' => $data['image_thumb'],
                'image_link' => strtolower($data['image_link']),
                'des' => $data['des'],
                'content' => $data['content'],
                'status' => $data['status'],
                'slug' => $data['slug'],
                'create_date' => date('Y-m-d'),
                'active' => 1,
            ));
            $id = $this->db->insert_id();
            echo "<font color='red'>" . $id . " Inserted </font>";
            $this->db->trans_complete();
        } else {
            echo "<font color='blue'>" . $id . " Inserted </font>";
            foreach ($query->result() as $row) {
                $id = $row->id;
            }
        }
        return $id;
    }

    function list_all_by_page($num = null, $offset = null) {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('content', $num, $offset);
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return $query->result();
    }

    public function list_categories_page($cateid = null, $num = null, $offset = null) {
        $this->db->where('cateid', $cateid);
        $this->db->order_by("id", "desc");
        $query = $this->db->get('content', $num, $offset);
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return $query->result();
    }

    function total_cate($id = null) {
        $this->db->where('cateid', $id);
        $this->db->from('content');
        return $this->db->count_all_results();
    }

    function total() {
        return $this->db->count_all('content');
    }

}
