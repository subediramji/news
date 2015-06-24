<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('db_model');
        $this->load->helper('url');
        $this->load->helper(array('form'));
    }
    function index()
    {
        $this->load->view('dashboard/login/login');
    }

    public function indexs() {
        $data['count_news'] = $this->db_model->count_news();
        $data['count_cat'] = $this->db_model->count_cat();
        $this->load->view('dashboard/design/header');
        $this->load->view('dashboard/design/left');
        $this->load->view('dashboard/index', $data);
        $this->load->view('dashboard/design/footer');
    }
    //===============START LOGIN PART ========================== 
    
    
    //===============CLOSED LOGIN PART =========================
    //============== START NEWS PART ==========================
    public function add_news() {
        $data['all_cat'] = $this->db_model->all_cat();
        $this->load->view('dashboard/design/header');
        $this->load->view('dashboard/design/left');
        $this->load->view('dashboard/news/add_news', $data);
        $this->load->view('dashboard/design/footer');
    }
    public function all_news() {
        $data['all_news'] = $this->db_model->all_news();
        $this->load->view('dashboard/design/header');
        $this->load->view('dashboard/design/left');
        $this->load->view('dashboard/news/all_news', $data);
        $this->load->view('dashboard/design/footer');
    }
    function deletenews($id = NULL) {
        if (isset($id)) {
            $data['news_id'] = $this->db_model->all_news_id($id);
            foreach ($data['news_id'] as $a) {
                $img = $a->image;
            }
            if ($img == !NULL) {     
                unlink('./upload/' . $img);
                unlink('./upload/thumb_' . $img);
            }
            $result = $this->db_model->delnews($id);
            if ($result == TRUE) {
                $this->session->set_flashdata('msg', "News Delete Successfully");
            } else {
                $this->session->set_flashdata('msg', "News Not Delete ");
            }
        } else {
            echo 'sorry file not found';
        }
        redirect('dashboard/all_news');
    }
    function editnews($id = NULL) {
        $data['news_id'] = $this->db_model->all_news_id($id);
        $data['all_cat'] = $this->db_model->all_cat();     
        $this->load->view('dashboard/design/header');
        $this->load->view('dashboard/design/left');
        $this->load->view('dashboard/news/news_edit', $data);
        $this->load->view('dashboard/design/footer');
    }
    function news_update() {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
        $this->form_validation->set_rules('title', 'Title', 'required|min_length[5]|max_length[15]');
        $this->form_validation->set_rules('summary', 'Summary', 'required|min_length[5]');
        if ($this->form_validation->run() == FALSE) {
          $id = $this->input->post('id');
            $data['news_id'] = $this->db_model->all_news_id($id);
            $data['all_cat'] = $this->db_model->all_cat();
            $this->load->view('dashboard/design/header');
            $this->load->view('dashboard/design/left');
            $this->load->view('dashboard/news/news_edit', $data);
            $this->load->view('dashboard/design/footer');
        } else {
          if (!$this->upload->do_upload()) {
                $id = $this->input->post('id');
                $image = $this->input->post('old_img');
                $data = array('title' => $this->input->post('title'), 'summary' => $this->input->post('summary'), 'image' => $image, 'c_id' => $this->input->post('category'));
                $this->db_model->update_news($data, $id);
                $this->session->set_flashdata('msg', ' news update sucessfully');
                redirect('dashboard/all_news');
            } else {
                $config['upload_path'] = './upload/';
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $dataimg = array('upload_data' => $this->upload->data());
                $image = $dataimg['upload_data']['file_name'];
                $image_thumb = dirname('thumb_' . $image . '/demo');
                $config['image_library'] = 'gd2';
                $config['source_image'] = './upload/' . $image;
                $config['new_image'] = $image_thumb;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 75;
                $config['height'] = 50;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $id = $this->input->post('id');
                $data = array('title' => $this->input->post('title'), 'summary' => $this->input->post('summary'), 'image' => $image, 'c_id' => $this->input->post('category'));
               $result = $this->db_model->update_news($data, $id);
                 if ($result == TRUE) {
            $this->session->set_flashdata('msg', "News Update Successfully");
        }
        else{
            $this->session->set_flashdata('msg', "Somthing error");
        }
           redirect('dashboard/all_news');
            
        }            
            }
           
    }
    function insert_news() {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
        $this->form_validation->set_rules('title', 'Title', 'required|min_length[5]|max_length[15]');
        $this->form_validation->set_rules('summary', 'Summary', 'required|min_length[5]');
        if ($this->form_validation->run() == FALSE) {
              $this->load->view('dashboard/design/header');
            $this->load->view('dashboard/design/left');
            $this->load->view('dashboard/news/add_news');
            $this->load->view('dashboard/design/footer');
        } else {
            if (!$this->upload->do_upload()) {
                $image = " ";
                $data = array('title' => $this->input->post('title'), 'summary' => $this->input->post('summary'), 'image' => $image, 'c_id' => $this->input->post('category'));
                $this->db_model->insert_news($data);
                $this->session->set_flashdata('msg', 'One news added sucessfully');
                redirect('dashboard/add_news');
            } else{
                $dataimg = array('upload_data' => $this->upload->data());
                $image = $dataimg['upload_data']['file_name'];
                $image_thumb = dirname('thumb_' . $image . '/demo');
                $config['image_library'] = 'gd2';
                $config['source_image'] = './upload/' . $image;
                $config['new_image'] = $image_thumb;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 75;
                $config['height'] = 50;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $data = array('title' => $this->input->post('title'), 'summary' => $this->input->post('summary'), 'image' => $image, 'c_id' => $this->input->post('category'));
                $result = $this->db_model->insert_news($data);
                if ($result == TRUE) {
                $this->session->set_flashdata('msg', "News Added Successfully");
                redirect('dashboard/add_news');
            } else {
                $this->session->set_flashdata('msg', "Please Fill up all data!");
            }                
            }            
            
        }        
    }
    //============== END NEWS PART =============================
    //============== STATR CATERORIES PART======================
    public function all_categories() {
        $data['all_cat'] = $this->db_model->all_cat();
        $this->load->view('dashboard/design/header');
        $this->load->view('dashboard/design/left');
        $this->load->view('dashboard/categories/all_categories', $data);
        $this->load->view('dashboard/design/footer');
    }
    public function add_categories() {
        $this->load->view('dashboard/design/header');
        $this->load->view('dashboard/design/left');
        $this->load->view('dashboard/categories/add_categories');
        $this->load->view('dashboard/design/footer');
    }
    public function insert_categories() {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
        $this->form_validation->set_rules('categories_name', 'Name', 'required|min_length[5]|max_length[15]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('dashboard/design/header');
            $this->load->view('dashboard/design/left');
            $this->load->view('dashboard/categories/add_categories');
            $this->load->view('dashboard/design/footer');
        } else {
            $categories_name = $this->input->post('categories_name');
            $result = $this->db_model->insert_categories($categories_name);
            if ($result == TRUE) {
                $this->session->set_flashdata('msg', "Category Added Successfully");
            } else {
                $this->session->set_flashdata('msg', "Please type a Category!");
            }
            redirect('dashboard/add_categories');
        }
    }
    function deletecat($id = NULL) {
        if (isset($id)) {
            $result = $this->db_model->delcat($id);
            if ($result == TRUE) {
                $this->session->set_flashdata('msg', "Category Delete Successfully");
            } else {
                $this->session->set_flashdata('msg', "Category Not Delete ");
            }
        } else {
            echo 'sorry file not found';
        }
        redirect('dashboard/all_categories');
    }
    function editcate($id = NULL) {
        $data['cat_id'] = $this->db_model->all_cat_id($id);
        $this->load->view('dashboard/design/header');
        $this->load->view('dashboard/design/left');
        $this->load->view('dashboard/categories/edit', $data);
        $this->load->view('dashboard/design/footer');
    }
    function update_cat() {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
        $this->form_validation->set_rules('title', 'Name', 'required|min_length[5]|max_length[15]');
        if ($this->form_validation->run() == FALSE) {
           // die('f');
            $id = $this->input->post('id');
            $data['cat_id'] = $this->db_model->all_cat_id($id);
            $this->load->view('dashboard/design/header');
            $this->load->view('dashboard/design/left');
            $this->load->view('dashboard/categories/edit',$data);
            $this->load->view('dashboard/design/footer');
        } else {
           // die($this->input->post('title'));
            $id = $this->input->post('id');
            $data = array('name' => $this->input->post('title'));
        $result = $this->db_model->update_categories($id, $data);
        if ($result == TRUE) {
            $this->session->set_flashdata('msg', "Category Update Successfully");
                       redirect('dashboard/all_categories');
       }
       else{
           $this->session->set_flashdata('msg', "Category Not Update");
       }
        }      
    }
}