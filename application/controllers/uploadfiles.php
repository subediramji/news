<?php if (!defined('BASEPATH'))   exit('No direct script access allowed');
class UploadFiles extends CI_Controller {
    private $error;
    private $success;
    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('file_model', 'file');
    }
    private function handle_error($err) {
        $this->error .= $err . "\r\n";
    }
    private function handle_success($succ) {
        $this->success .= $succ . "\r\n";
    }
    function index() {
       // die('yes');
        //date_default_timezone_set('Asia/kathamandu');
        if ($this->input->post('file_upload')) {
            //file upload destination
            $dir_path = './upload/';
            $config['upload_path'] = $dir_path;
            $config['allowed_types'] = '*';
            $config['max_width'] = '610';
            $config['max_size'] = '500';            
           // $config['height'] = 150;
            $config['max_filename'] = '255';
            //$config['encrypt_name'] = TRUE;
            //upload file
            $i = 0;
            $files = array();
            $is_file_error = FALSE;
            if ($_FILES['upload_file1']['size'] <= 0) {
                $this->handle_error('Select at least one file.');
            } else {
                foreach ($_FILES as $key => $value) {
                    if (!empty($value['name'])) {
                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload($key)) {
                            $this->handle_error($this->upload->display_errors());
                            $is_file_error = TRUE;
                        } else {
                            $files[$i] = $this->upload->data();
                            ++$i;
                        }
                    }
                }
            }
            // There were errors, we have to delete the uploaded files
            if ($is_file_error && $files) {
                for ($i = 0; $i < count($files); $i++) {
                   // die($files[$i]['file_name']);
                    $file = $dir_path . $files[$i]['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
                }
            }
           if (!$is_file_error && $files) {
                //var_dump($files);
                $resp = $this->file->save_files_info($files);
                if ($resp === TRUE) {
                    $this->handle_success('File(s) was/were successfully uploaded.');
                } else {
                    for ($i = 0; $i < count($files); $i++) {
                        $file = $dir_path . $files[$i]['file_name'];
                        if (file_exists($file)) {
                            unlink($file);
                        }
                    }
                    $this->handle_error('Error while saving file info to Database.');
                }
            }
        }
        $data['errors'] = $this->error;
        $data['success'] = $this->success;
        $this->load->model('db_model');
         $data['files'] = $this->db_model->all_file();
        $this->load->view('dashboard/design/header');
                $this->load->view('dashboard/design/left');
                $this->load->view('dashboard/media/list',$data);
                $this->load->view('dashboard/design/footer');
    }
}/* End of file uploadfiles.php // Location: ./application/controllers/uploadfiles.php */