<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {        
    function __construct()
    {
        parent::__construct();
        //$this->load->library('database');
        $this->load->model('db_model');
        $this->load->helper('url');
        $this->load->helper(array('form'));
        
    }
	public function index()
	{
            $data['count_news'] = $this->db_model->count_news();
            $data['count_cat'] = $this->db_model->count_cat();
                $this->load->view('dashboard/design/header');
		$this->load->view('dashboard/design/left');
                $this->load->view('dashboard/index',$data);
                $this->load->view('dashboard/design/footer');
	}
        //============== START NEWS PART ==========================
        public function add_news()
        {
            $data['all_cat'] = $this->db_model->all_cat();
                $this->load->view('dashboard/design/header');
		$this->load->view('dashboard/design/left');
                $this->load->view('dashboard/news/add_news',$data);
                $this->load->view('dashboard/design/footer');
            
        }
        
        public function all_news()
        {
            $data['all_news'] = $this->db_model->all_news();
            
                $this->load->view('dashboard/design/header');
		$this->load->view('dashboard/design/left');
                $this->load->view('dashboard/news/all_news',$data);
                $this->load->view('dashboard/design/footer');
            
        }
        
        function deletenews($id=NULL)
        {
           if(isset($id))
           {
               $data['news_id'] = $this->db_model->all_news_id($id);
               foreach ($data['news_id'] as $a)
               {
                   $img = $a->image;
               }
                if ($img == !NULL) {
               // die($img);
                unlink('./upload/' . $img);
                 unlink('./upload/thumb_'.$img);
            }
               $result = $this->db_model->delnews($id);
               if($result==TRUE)
               {
                   $this->session->set_flashdata('msg',"News Delete Successfully");
               }
               else{
                   $this->session->set_flashdata('msg',"News Not Delete ");
               }
           }
 else {
     echo 'sorry file not found';
        }
        redirect('dashboard/all_news'); 
        }
         
        function editnews($id=NULL)
        {
            $data['news_id'] = $this->db_model->all_news_id($id);
            $data['all_cat'] = $this->db_model->all_cat();
           // var_dump($data['cat_id']);
                $this->load->view('dashboard/design/header');
		$this->load->view('dashboard/design/left');
                $this->load->view('dashboard/news/news_edit',$data);
                $this->load->view('dashboard/design/footer');
            
        }
        
        function news_update()
        {
                 $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
            //die($this->input->post('summary'));
           if(($this->input->post('summary')==!NULL)&&($this->input->post('title')==!NULL))
            {   
               if ( ! $this->upload->do_upload())
                {
                   //die('n');
                   $id = $this->input->post('id');
                      $image = $this->input->post('old_img');
                     // echo 'n';
                     // die($image);
                      $data = array('title' => $this->input->post('title'),'summary'=>  $this->input->post('summary'),'image'=>$image,'c_id'=>  $this->input->post('category'));
                        $this->db_model->update_news($data,$id);
                        $this->session->set_flashdata('msg', ' news update sucessfully');
                        redirect('dashboard/all_news');
                }
                else
                 
                {
                   //die('y');
                    $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                        $dataimg = array('upload_data' => $this->upload->data());
                         $image = $dataimg['upload_data']['file_name'];
                         $image_thumb = dirname('thumb_' . $image . '/demo');
                        // die($image_thumb);
                         $config['image_library'] = 'gd2';
                         //echo'y';
                         //die($images);
                $config['source_image'] = './upload/'.$image;
                $config['new_image'] = $image_thumb;
                $config['maintain_ratio'] = TRUE;
                $config['width']         = 75;
                $config['height']       = 50;

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();
                $id = $this->input->post('id');
                        $data = array('title' => $this->input->post('title'),'summary'=>  $this->input->post('summary'),'image'=>$image,'c_id'=>  $this->input->post('category'));
                        $this->db_model->update_news($data,$id);
                        $this->session->set_flashdata('msg', 'One news added sucessfully');
                        redirect('dashboard/all_news');
                
                    }
            }
            else{
               // die('yes');
                $data['error'] = 'Title and Summary can not be blank!';
                $id = $this->input->post('id');
                $data['news_id'] = $this->db_model->all_news_id($id);
                $data['all_cat'] = $this->db_model->all_cat();
                $this->load->view('dashboard/design/header');
		$this->load->view('dashboard/design/left');
                $this->load->view('dashboard/news/news_edit',$data);
                $this->load->view('dashboard/design/footer');
                
            }
        }
                function insert_news()
        {
             
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                if($this->input->post('summary')!==" " && $this->input->post('title')!==" "){
                    
                  if ( ! $this->upload->do_upload())
                {
                        //$error = array('error' => $this->upload->display_errors());
                        //var_dump($error);
                        //$this->session->set_flashdata('msg', '');
                        //$this->load->view('dashboard/news/add_news',$error);
                      $image = " ";
                      $data = array('title' => $this->input->post('title'),'summary'=>  $this->input->post('summary'),'image'=>$image,'c_id'=>  $this->input->post('category'));
                        $this->db_model->insert_news($data);
                        $this->session->set_flashdata('msg', 'One news added sucessfully');
                        redirect('dashboard/add_news');
                }
                else
                 
                {
                   
                        $dataimg = array('upload_data' => $this->upload->data());
                         $image = $dataimg['upload_data']['file_name'];
                         $image_thumb = dirname('thumb_' . $image . '/demo');
                        // die($image_thumb);
                         $config['image_library'] = 'gd2';
                         
                $config['source_image'] = './upload/'.$image;
                $config['new_image'] = $image_thumb;
                $config['maintain_ratio'] = TRUE;
                $config['width']         = 75;
                $config['height']       = 50;

                $this->load->library('image_lib', $config);

                $this->image_lib->resize();
                        $data = array('title' => $this->input->post('title'),'summary'=>  $this->input->post('summary'),'image'=>$image,'c_id'=>  $this->input->post('category'));
                        $this->db_model->insert_news($data);
                        $this->session->set_flashdata('msg', 'One news added sucessfully');
                        redirect('dashboard/add_news');
                
                    }  
                }else{
                    $error = array('error' => 'Please fill up all fields');
                   // $this->session->set_flashdata('msg', 'Please fill up all fields');
                    $this->load->view('dashboard/design/header');
		$this->load->view('dashboard/design/left');
                $this->load->view('dashboard/news/add_news',$error);
                $this->load->view('dashboard/design/footer');
                    
                }
                   
                
               
            
        }

        //============== END NEWS PART =============================
        //============== STATR CATERORIES PART======================
        public function all_categories()
        {
            $data['all_cat'] = $this->db_model->all_cat();
                $this->load->view('dashboard/design/header');
		$this->load->view('dashboard/design/left');
                $this->load->view('dashboard/categories/all_categories',$data);
                $this->load->view('dashboard/design/footer');
            
            
        }
        
        public function add_categories()
        {
            $this->load->view('dashboard/design/header');
		$this->load->view('dashboard/design/left');
               $this->load->view('dashboard/categories/add_categories');
                $this->load->view('dashboard/design/footer');
            
        }
        public function insert_categories()
        {
           $categories_name = $this->input->post('categories_name');
           if($categories_name==!"" || $categories_name==!NULL)
               {
               $result = $this->db_model->insert_categories($categories_name);
          //die($result);
          if($result == TRUE)
          {
          $this->session->set_flashdata('msg',"Category Added Successfully");
          } }
          else{
            $this->session->set_flashdata('msg',"Please type a Category!");  
          }
          
           redirect('dashboard/add_categories');
        }
        function deletecat($id=NULL)
        {
           if(isset($id))
           {
               $result = $this->db_model->delcat($id);
               if($result==TRUE)
               {
                   $this->session->set_flashdata('msg',"Category Delete Successfully");
               }
               else{
                   $this->session->set_flashdata('msg',"Category Not Delete ");
               }
           }
 else {
     echo 'sorry file not found';
        }
        redirect('dashboard/all_categories');
        }
        
        function editcate($id=NULL)
        {
            $data['cat_id'] = $this->db_model->all_cat_id($id);
           // var_dump($data['cat_id']);
            $this->load->view('dashboard/design/header');
		$this->load->view('dashboard/design/left');
            $this->load->view('dashboard/categories/edit',$data);
                $this->load->view('dashboard/design/footer');
            
        }
        
        function update_cat()
        {
            $id = $this->input->post('id');                   
            $data = array('name'=>  $this->input->post('title'));
             $result = $this->db_model->update_categories($id,$data);
             if($result == TRUE)
          {
          $this->session->set_flashdata('msg',"Category Update Successfully");
          } 
                   
           redirect('dashboard/all_categories');
        }
}
