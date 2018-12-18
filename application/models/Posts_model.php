<?php

class Posts_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function add_post() {

		$data = array(
	        'post_title' => $this->input->post('post-title'),
	        'post_text' => $this->input->post('post-text')
	    );

	    $this->db->insert('posts', $data);
	}

	public function get_posts($post_id = FALSE) {

		if ( $post_id === FALSE ) {
			$query = $this->db->get('posts');
			return $query->result_array();
		} else {
			$query = $this->db->get_where('posts', array('post_id' => $post_id));
			return $query->row_array();
		}
	}
}