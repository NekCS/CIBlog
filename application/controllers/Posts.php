<?php

class Posts extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('posts_model');
	}

	public function index($post_id = false) {
		if ( $post_id == false) {
			$data['title'] = 'Posts';
			$data['posts'] = $this->posts_model->get_posts();
		} else {
			$data['title'] = 'Post';
			$data['posts'] = $this->posts_model->get_posts($post_id);
		}
		
		$this->load->view('templates/header', $data);
		$this->load->view('posts/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function add() {
		
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('post-title', 'Title', 'required');
	    $this->form_validation->set_rules('post-text', 'Text', 'required');

		if ($this->form_validation->run() === FALSE) {	
	    	$data['title'] = 'Add Post';
	        $this->load->view('templates/header', $data);
	        $this->load->view('posts/add');
	        $this->load->view('templates/footer');
	    } else {	
	        $this->posts_model->add_post();
	        $data['title'] = 'Post Added';
	        $this->load->view('templates/header', $data);
	        $this->load->view('posts/success');
	        $this->load->view('templates/footer');
	    }
	}

	public function edit($post_id) {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('post-title', 'Title', 'required');
	    $this->form_validation->set_rules('post-text', 'Text', 'required');

	    if ($this->form_validation->run() === FALSE) {	
	    	$data['title'] = 'Edit Post';
	        $this->load->view('templates/header', $data);
	        $this->load->view('posts/add');
	        $this->load->view('templates/footer');
	    } else {	
	        $this->posts_model->add_post();
	        $data['title'] = 'Post Edited';
	        $this->load->view('templates/header', $data);
	        $this->load->view('posts/success');
	        $this->load->view('templates/footer');
	    }
	}
}