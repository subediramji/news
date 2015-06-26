<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
 function __construct() {
        parent::__construct();
        $this->load->model('db_model');
        $this->load->helper('url');
        $this->load->helper(array('form'));
    }
	public function index()
	{
            $data['headlines'] = $this->db_model->getHeadlines();
            $data['slider'] = $this->db_model->getSlider();
            $data['technology'] = $this->db_model->getTechnology();
            $data['latest'] = $this->db_model->letestNews();
            $data['business'] = $this->db_model->business();
            $data['worldnews'] = $this->db_model->worldNews();
            $data['travel'] = $this->db_model->travel();
            $data['life'] = $this->db_model->life();
            $data['culture'] = $this->db_model->culture();
            $this->load->view('main/design/header');
		$this->load->view('main/index',$data);
                $this->load->view('main/design/right');
                 $this->load->view('main/design/footer');
                
	}
        
        public function post()
        {    $data['latest'] = $this->db_model->letestNews();
            $this->load->view('main/design/header');
            $this->load->view('main/post');
            $this->load->view('main/design/right',$data);
            $this->load->view('main/design/footer');
        }
}
