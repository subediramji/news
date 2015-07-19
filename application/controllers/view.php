<?php defined('BASEPATH') OR exit('No direct script access allowed');
class View extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('db_model');
        $this->load->helper('url');
        $this->load->helper(array('form'));
    }
    public function index() {
        $data['headlines'] = $this->db_model->getHeadlines();
        $data['slider'] = $this->db_model->getSlider();
        $data['technology'] = $this->db_model->getTechnology();
        $data['latest'] = $this->db_model->letestNews();
        $data['business'] = $this->db_model->business();
        $data['worldnews'] = $this->db_model->worldNews();
        $data['travel'] = $this->db_model->travel();
        $data['life'] = $this->db_model->life();
        $data['culture'] = $this->db_model->culture();
        $data['cate'] = $this->db_model->all_cat();
        $data['advt'] = $this->db_model->advt();
        $data['advs'] = $this->db_model->advs();
        $this->load->view('main/design/header', $data);
        $this->load->view('main/index', $data);
        $this->load->view('main/design/right');
        $this->load->view('main/design/footer');
    }
    function addinfo($id) {
        $result = $this->db_model->find_page($id);
        if (!empty($result)) {
            $this->db_model->update_view($id);
        } else {
            $this->db_model->insert_view($id);
        }
    }
    function addViewDetail($ip, $agent, $datetime) {
        $this->db_model->add_ipDetail($ip, $agent, $datetime);
    }
    public function post($id = NULL) {
        if ($id == !NULL) {
            $this->addinfo($id);
            //$ip = $_SERVER["REMOTE_ADDR"];
            //$agent = $_SERVER["HTTP_USER_AGENT"];
            //$datetime = date("Y/m/d") . ' ' . date('H:i:s');
            //$this->addViewDetail($ip, $agent, $datetime);
            $data['headlines'] = $this->db_model->getHeadlines();
            $data['latest'] = $this->db_model->letestNews();
            $data['idnews'] = $this->db_model->all_news_id($id);
            $data['cate'] = $this->db_model->all_cat();
            $data['advt'] = $this->db_model->advt();
            $data['advs'] = $this->db_model->advs();
            if(!empty($data['idnews'][0]->c_id)){
            $catid = substr($data['idnews'][0]->c_id, 0, 2);
            $data['pnews'] = $this->db_model->all_news_cate_id_limit($catid);
            }
           
            $this->load->view('main/design/header', $data);
            $this->load->view('main/post', $data);
            $this->load->view('main/design/right', $data);
            $this->load->view('main/design/footer');
        } else {
            echo 'page not found';
        }
    }
    function categories($id = NULL) {
        if ($id == !NULL) {
            $data['headlines'] = $this->db_model->getHeadlines();
            $data['latest'] = $this->db_model->letestNews();
            $data['idcat'] = $this->db_model->all_cat_id($id);
            $data['idcate'] = $this->db_model->all_news_cate_id($id);
            $data['cate'] = $this->db_model->all_cat();
            $this->load->view('main/design/header', $data);
            $this->load->view('main/cate', $data);
            $this->load->view('main/design/right', $data);
            $this->load->view('main/design/footer');
        } else {
            echo 'page not found';
        }
    }
}