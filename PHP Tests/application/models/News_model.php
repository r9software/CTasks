<?php

class News_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_news($slug = FALSE) {
        if ($slug === FALSE) {
            $this->db->from('news');
            $this->db->order_by('datetime', 'DESC');
            $this->db->limit(10);
            $query = $this->db->get();
            return $query->result_array();
        }
        $query = $this->db->get_where('news', array('ID' => $slug));
        return $query->row_array();
    }

}
