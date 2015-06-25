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
            $data['technology'] = $this->db_model->getTechnplogy();
            $data['latest'] = $this->db_model->letestNews();
		$this->load->view('main/index',$data);
	}
}
