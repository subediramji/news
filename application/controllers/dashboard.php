<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('db_model');
        $this->load->helper('url');
        $this->load->helper(array('form'));
        $this->load->helper('text');
    }
    public function index() {
        if ($this->session->userdata('is_logged_in')) {
            $data['count_news'] = $this->db_model->count_news();
            $data['count_cat'] = $this->db_model->count_cat();
            $this->load->view('dashboard/design/header');
            $this->load->view('dashboard/design/left');
            $this->load->view('dashboard/index', $data);
            $this->load->view('dashboard/design/footer');
        } else {
            redirect('login');
        }
    }
    //===============DATE CONVERT PART ==========================
    private $_bs = array(
        0 => array(2000, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        1 => array(2001, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        2 => array(2002, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        3 => array(2003, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        4 => array(2004, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        5 => array(2005, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        6 => array(2006, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        7 => array(2007, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        8 => array(2008, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31),
        9 => array(2009, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        10 => array(2010, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        11 => array(2011, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        12 => array(2012, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30),
        13 => array(2013, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        14 => array(2014, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        15 => array(2015, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        16 => array(2016, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30),
        17 => array(2017, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        18 => array(2018, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        19 => array(2019, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        20 => array(2020, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        21 => array(2021, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        22 => array(2022, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30),
        23 => array(2023, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        24 => array(2024, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        25 => array(2025, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        26 => array(2026, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        27 => array(2027, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        28 => array(2028, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        29 => array(2029, 31, 31, 32, 31, 32, 30, 30, 29, 30, 29, 30, 30),
        30 => array(2030, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        31 => array(2031, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        32 => array(2032, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        33 => array(2033, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        34 => array(2034, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        35 => array(2035, 30, 32, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31),
        36 => array(2036, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        37 => array(2037, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        38 => array(2038, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        39 => array(2039, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30),
        40 => array(2040, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        41 => array(2041, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        42 => array(2042, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        43 => array(2043, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30),
        44 => array(2044, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        45 => array(2045, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        46 => array(2046, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        47 => array(2047, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        48 => array(2048, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        49 => array(2049, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30),
        50 => array(2050, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        51 => array(2051, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        52 => array(2052, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        53 => array(2053, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30),
        54 => array(2054, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        55 => array(2055, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        56 => array(2056, 31, 31, 32, 31, 32, 30, 30, 29, 30, 29, 30, 30),
        57 => array(2057, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        58 => array(2058, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        59 => array(2059, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        60 => array(2060, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        61 => array(2061, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        62 => array(2062, 30, 32, 31, 32, 31, 31, 29, 30, 29, 30, 29, 31),
        63 => array(2063, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        64 => array(2064, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        65 => array(2065, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        66 => array(2066, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31),
        67 => array(2067, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        68 => array(2068, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        69 => array(2069, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        70 => array(2070, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30),
        71 => array(2071, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        72 => array(2072, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30),
        73 => array(2073, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31),
        74 => array(2074, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        75 => array(2075, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        76 => array(2076, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30),
        77 => array(2077, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31),
        78 => array(2078, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30),
        79 => array(2079, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30),
        80 => array(2080, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30),
        81 => array(2081, 31, 31, 32, 32, 31, 30, 30, 30, 29, 30, 30, 30),
        82 => array(2082, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30),
        83 => array(2083, 31, 31, 32, 31, 31, 30, 30, 30, 29, 30, 30, 30),
        84 => array(2084, 31, 31, 32, 31, 31, 30, 30, 30, 29, 30, 30, 30),
        85 => array(2085, 31, 32, 31, 32, 30, 31, 30, 30, 29, 30, 30, 30),
        86 => array(2086, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30),
        87 => array(2087, 31, 31, 32, 31, 31, 31, 30, 30, 29, 30, 30, 30),
        88 => array(2088, 30, 31, 32, 32, 30, 31, 30, 30, 29, 30, 30, 30),
        89 => array(2089, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30),
        90 => array(2090, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30)
    );
    private $_nep_date = array('year' => '', 'month' => '', 'date' => '', 'day' => '', 'nmonth' => '', 'num_day' => '');
    private $_eng_date = array('year' => '', 'month' => '', 'date' => '', 'day' => '', 'emonth' => '', 'num_day' => '');
    public $debug_info = "";
    private function _is_in_range_eng($yy, $mm, $dd) {
        if ($yy < 1944 || $yy > 2033) {
            return 'Supported only between 1944-2022';
        }
        if ($mm < 1 || $mm > 12) {
            return 'Error! month value can be between 1-12 only';
        }
        if ($dd < 1 || $dd > 31) {
            return 'Error! day value can be between 1-31 only';
        }
        return TRUE;
    }
    public function is_leap_year($year) {
        $a = $year;
        if ($a % 100 == 0) {
            if ($a % 400 == 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            if ($a % 4 == 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }
    private function _get_day_of_week($day) {
        switch ($day) {
            case 1:
                $day = "Sunday";
                break;
            case 2:
                $day = "Monday";
                break;
            case 3:
                $day = "Tuesday";
                break;
            case 4:
                $day = "Wednesday";
                break;
            case 5:
                $day = "Thursday";
                break;
            case 6:
                $day = "Friday";
                break;
            case 7:
                $day = "Saturday";
                break;
        }
        return $day;
    }
    private function _get_nepali_month($m) {
        $n_month = FALSE;
        switch ($m) {
            case 1:
                $n_month = "Baishak";
                break;
            case 2:
                $n_month = "Jestha";
                break;
            case 3:
                $n_month = "Ashad";
                break;
            case 4:
                $n_month = "Shrawn";
                break;
            case 5:
                $n_month = "Bhadra";
                break;
            case 6:
                $n_month = "Ashwin";
                break;
            case 7:
                $n_month = "kartik";
                break;
            case 8:
                $n_month = "Mangshir";
                break;
            case 9:
                $n_month = "Poush";
                break;
            case 10:
                $n_month = "Magh";
                break;
            case 11:
                $n_month = "Falgun";
                break;
            case 12:
                $n_month = "Chaitra";
                break;
        }
        return $n_month;
    }
    public function eng_to_nep($yy, $mm, $dd) {
        $chk = $this->_is_in_range_eng($yy, $mm, $dd);
        if ($chk !== TRUE) {
            die($chk);
        } else {
            // Month data.
            $month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
            // Month for leap year
            $lmonth = array(31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
            $def_eyy = 1944; // initial english date.
            $def_nyy = 2000;
            $def_nmm = 9;
            $def_ndd = 17 - 1; // inital nepali date.
            $total_eDays = 0;
            $total_nDays = 0;
            $a = 0;
            $day = 7 - 1;
            $m = 0;
            $y = 0;
            $i = 0;
            $j = 0;
            $numDay = 0;
            // Count total no. of days in-terms year
            for ($i = 0; $i < ($yy - $def_eyy); $i++) { //total days for month calculation...(english)
                if ($this->is_leap_year($def_eyy + $i) === TRUE) {
                    for ($j = 0; $j < 12; $j++) {
                        $total_eDays += $lmonth[$j];
                    }
                } else {
                    for ($j = 0; $j < 12; $j++) {
                        $total_eDays += $month[$j];
                    }
                }
            }
            // Count total no. of days in-terms of month
            for ($i = 0; $i < ($mm - 1); $i++) {
                if ($this->is_leap_year($yy) === TRUE) {
                    $total_eDays += $lmonth[$i];
                } else {
                    $total_eDays += $month[$i];
                }
            }
            // Count total no. of days in-terms of date
            $total_eDays += $dd;
            $i = 0;
            $j = $def_nmm;
            $total_nDays = $def_ndd;
            $m = $def_nmm;
            $y = $def_nyy;
            // Count nepali date from array
            while ($total_eDays != 0) {
                $a = $this->_bs[$i][$j];
                $total_nDays++;  //count the days
                $day++;    //count the days interms of 7 days
                if ($total_nDays > $a) {
                    $m++;
                    $total_nDays = 1;
                    $j++;
                }
                if ($day > 7) {
                    $day = 1;
                }
                if ($m > 12) {
                    $y++;
                    $m = 1;
                }
                if ($j > 12) {
                    $j = 1;
                    $i++;
                }
                $total_eDays--;
            }
            $numDay = $day;
            $this->_nep_date['year'] = $y;
            $this->_nep_date['month'] = $m;
            $this->_nep_date['date'] = $total_nDays;
            $this->_nep_date['day'] = $this->_get_day_of_week($day);
            $this->_nep_date['nmonth'] = $this->_get_nepali_month($m);
            $this->_nep_date['num_day'] = $numDay;
            return $this->_nep_date;
        }
    }
    //===============CLOSED CONVERT PART =========================
    //============== START NEWS PART ==========================
    public function add_news() {
        if ($this->session->userdata('is_logged_in')) {
            $data['all_cat'] = $this->db_model->all_cat();
            $this->load->view('dashboard/design/header');
            $this->load->view('dashboard/design/left');
            $this->load->view('dashboard/news/add_news', $data);
            $this->load->view('dashboard/design/footer');
        } else {
            redirect('login');
        }
    }
//    public function test() {
//        if ($this->session->userdata('is_logged_in')) {
//            $data['all_news'] = $this->db_model->all_news();
//            $this->load->view('dashboard/design/header');
//            $this->load->view('dashboard/design/left');
//            $this->load->view('dashboard/news/all_news', $data);
//            $this->load->view('dashboard/design/footer');
//        } else {
//            redirect('login');
//        }
//    }
    function all_news()
    {
        if ($this->session->userdata('is_logged_in')) {
            $data['all_news'] = $this->db_model->all_news();
            $data['all_cat'] = $this->db_model->all_cat();
           $this->load->view('dashboard/design/header');
           $this->load->view('dashboard/design/left');
            $this->load->view('dashboard/news/test',$data);
           $this->load->view('dashboard/design/f1');
        } else {
            redirect('login');
        }
    }
            function deletenews($id = NULL) {
        if ($this->session->userdata('is_logged_in')) {
            if (isset($id)) {
                $data['news_id'] = $this->db_model->all_news_id($id);
                foreach ($data['news_id'] as $a) {
                    $img = $a->image;
                }
                if (file_exists("./upload/" . $img)) {
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
        } else {
            redirect('login');
        }
    }
    function editnews($id = NULL) {
        if ($this->session->userdata('is_logged_in')) {
            $data['news_id'] = $this->db_model->all_news_id($id);
            $data['all_cat'] = $this->db_model->all_cat();
            $this->load->view('dashboard/design/header');
            $this->load->view('dashboard/design/left');
            $this->load->view('dashboard/news/news_edit', $data);
            $this->load->view('dashboard/design/footer');
        } else {
            redirect('login');
        }
    }
    function news_update() {
        if ($this->session->userdata('is_logged_in')) {
            $config['upload_path'] = './upload/';            
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
            $this->form_validation->set_rules('title', 'Title', 'required|min_length[5]');
            $this->form_validation->set_rules('summary', 'Summary', 'required|min_length[5]');
            $this->form_validation->set_rules('category[]', 'Categories', 'required');
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
                    $cate = $this->input->post('category');
                    $chk = implode(",", $cate);
                    $id = $this->input->post('id');
                    $image = $this->input->post('old_img');
                    $data = array('title' => $this->input->post('title'), 'summary' => $this->input->post('summary'), 'image' => $image, 'c_id' => $chk);
                    $this->db_model->update_news($data, $id);
                    $this->session->set_flashdata('msg', ' news update sucessfully');
                    redirect('dashboard/all_news');
                } else {
                    $cate = $this->input->post('category');
                    $chk = implode(",", $cate);
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
                    $config['width'] = 225;
                    $config['height'] = 150;
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $id = $this->input->post('id');
                    $data = array('title' => $this->input->post('title'), 'summary' => $this->input->post('summary'), 'image' => $image, 'c_id' => $chk);
                    $result = $this->db_model->update_news($data, $id);
                    if ($result == TRUE) {
                        $this->session->set_flashdata('msg', "News Update Successfully");
                    } else {
                        $this->session->set_flashdata('msg', "Somthing error");
                    }
                    redirect('dashboard/all_news');
                }
            }
        } else {
            redirect('login');
        }
    }
    function insert_news() {
        if ($this->session->userdata('is_logged_in')) {
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
            $this->form_validation->set_rules('title', 'Title', 'required|min_length[3]');
            $this->form_validation->set_rules('summary', 'Summary', 'required|min_length[5]');
            $this->form_validation->set_rules('category[]', 'Categories', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('dashboard/design/header');
                $this->load->view('dashboard/design/left');
                $this->load->view('dashboard/news/add_news');
                $this->load->view('dashboard/design/footer');
            } else {
                if (!$this->upload->do_upload()) {
                    $cate = $this->input->post('category');
                    $chkegory = implode(",", $cate);
                    $year = date('Y');
                    $month = date('m');
                    $day = date('d');
                    $cal = $this->eng_to_nep($year, $month, $day);
                    $string = word_limiter($this->input->post('summary'), 10);
                   // $content = "this is something with an <img src=\"test.png\"/> in it.";
                    $content = preg_replace("/<img[^>]+\>/i", "(image) ", $string);
                    //die($content);
                    $english_conversion = $cal['year'] . '-' . $cal['month'] . '-' . $cal['date'] . ' ( ' . $cal['nmonth'] . '/' . $cal['day'] . ' )';
                    $image = " ";
                    $data = array('title' => $this->input->post('title'), 'summary' => $this->input->post('summary'), 'image' => $image, 'c_id' => $chkegory, 'time' => $english_conversion, 'limit_summary' => $content);
                    $this->db_model->insert_news($data);
                    $this->session->set_flashdata('msg', 'One news added sucessfully');
                    redirect('dashboard/add_news');
                } else {
                    $cate = $this->input->post('category');
                    // $checkbox1=$_POST['techno'];
                    $chkegory = implode(",", $cate);
                    $year = date('Y');
                    $month = date('m');
                    $day = date('d');
                    $string = word_limiter($this->input->post('summary'), 10);
                    $content = preg_replace("/<img[^>]+\>/i", "(image) ", $string);
                    $cal = $this->eng_to_nep($year, $month, $day);
                    $english_conversion = $cal['year'] . '-' . $cal['month'] . '-' . $cal['date'] . ' ( ' . $cal['nmonth'] . '/' . $cal['day'] . ' )';
                    $dataimg = array('upload_data' => $this->upload->data());
                    $image = $dataimg['upload_data']['file_name'];
                    $image_thumb = dirname('thumb_' . $image . '/demo');
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './upload/' . $image;
                    $config['new_image'] = $image_thumb;
                    $config['maintain_ratio'] = TRUE;
                   $config['width'] = 225;
                    $config['height'] = 150;
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $data = array('title' => $this->input->post('title'), 'summary' => $this->input->post('summary'), 'image' => $image, 'c_id' => $chkegory, 'time' => $english_conversion, 'limit_summary' => $content);
                    $result = $this->db_model->insert_news($data);
                    if ($result == TRUE) {
                        $this->session->set_flashdata('msg', "News Added Successfully");
                        redirect('dashboard/add_news');
                    } else {
                        $this->session->set_flashdata('msg', "Please Fill up all data!");
                    }
                }
            }
        } else {
            redirect('login');
        }
    }
    //============== END NEWS PART =============================
    //============== STATR CATERORIES PART======================
    public function all_categories() {
        if ($this->session->userdata('is_logged_in')) {
            $data['all_cat'] = $this->db_model->all_cat();
            $this->load->view('dashboard/design/header');
            $this->load->view('dashboard/design/left');
            $this->load->view('dashboard/categories/all_categories', $data);
            $this->load->view('dashboard/design/footer');
        } else {
            redirect('login');
        }
    }
    public function add_categories() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->view('dashboard/design/header');
            $this->load->view('dashboard/design/left');
            $this->load->view('dashboard/categories/add_categories');
            $this->load->view('dashboard/design/footer');
        } else {
            redirect('login');
        }
    }
    public function insert_categories() {
        if ($this->session->userdata('is_logged_in')) {
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
        } else {
            redirect('login');
        }
    }
    function deletecat($id = NULL) {
        if ($this->session->userdata('is_logged_in')) {
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
        } else {
            redirect('login');
        }
    }
    function editcate($id = NULL) {
        if ($this->session->userdata('is_logged_in')) {
            $data['cat_id'] = $this->db_model->all_cat_id($id);
            $this->load->view('dashboard/design/header');
            $this->load->view('dashboard/design/left');
            $this->load->view('dashboard/categories/edit', $data);
            $this->load->view('dashboard/design/footer');
        } else {
            redirect('login');
        }
    }
    function update_cat() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
            $this->form_validation->set_rules('title', 'Name', 'required');
            if ($this->form_validation->run() == FALSE) {
                // die('f');
                $id = $this->input->post('id');
                $data['cat_id'] = $this->db_model->all_cat_id($id);
                $this->load->view('dashboard/design/header');
                $this->load->view('dashboard/design/left');
                $this->load->view('dashboard/categories/edit', $data);
                $this->load->view('dashboard/design/footer');
            } else {
                // die($this->input->post('title'));
                $id = $this->input->post('id');
                $data = array('name' => $this->input->post('title'));
                $result = $this->db_model->update_categories($id, $data);
                if ($result == TRUE) {
                    $this->session->set_flashdata('msg', "Category Update Successfully");
                    redirect('dashboard/all_categories');
                } else {
                    $this->session->set_flashdata('msg', "Category Not Update");
                }
            }
        } else {
            redirect('login');
        }
    }
    //=================== START ADVERTISEMENT PART =============================================//
    function add_adv() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->view('dashboard/design/header');
            $this->load->view('dashboard/design/left');
            $this->load->view('dashboard/adv/add');
            $this->load->view('dashboard/design/footer');
        } else {
            redirect('login');
        }
    }
    function insert_adv() {
        if ($this->session->userdata('is_logged_in')) {
            $config['upload_path'] = './upload/';
            $config['max_width'] = '620';
            $config['max_size'] = '500';            
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
            $this->form_validation->set_rules('location[]', 'Location', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('msg', "Please select at least one location");
                redirect('dashboard/add_adv');
            } else {
                if (!$this->upload->do_upload()) {
                    $data['errors'] = $this->upload->display_errors();
                    // die($e)
                    $this->load->view('dashboard/design/header');
                    $this->load->view('dashboard/design/left');
                    $this->load->view('dashboard/adv/add',$data);
                    $this->load->view('dashboard/design/footer');
                } else {
                    $dataimg = array('upload_data' => $this->upload->data());
                    $image = $dataimg['upload_data']['file_name'];
                    $image_thumb = dirname('thumb_' . $image . '/demo');
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './upload/' . $image;
                    $config['new_image'] = $image_thumb;
                    $config['maintain_ratio'] = TRUE;
                    //$config['width'] = 225;
                    $config['height'] = 300;
                    $cate = $this->input->post('location');
                    // $checkbox1=$_POST['techno'];
                    $location = implode(",", $cate);
                    //die($location);
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $data = array('image' => $image, 'location' => $location);
                    $result = $this->db_model->insert_adv($data);
                    if ($result == TRUE) {
                        $this->session->set_flashdata('msg', "Advertisement Added Successfully");
                        redirect('dashboard/add_adv');
                    } else {
                        $this->session->set_flashdata('msg', "Please Fill up all data!");
                    }
                }
            }
        } else {
            redirect('login');
        }
    }
    function all_adv() {
        if ($this->session->userdata('is_logged_in')) {
            $data['adv'] = $this->db_model->all_adv();
            $this->load->view('dashboard/design/header');
            $this->load->view('dashboard/design/left');
            $this->load->view('dashboard/adv/list', $data);
            $this->load->view('dashboard/design/footer');
        } else {
            redirect('login');
        }
    }
    function delete_adv($id = NULL) {
        if ($this->session->userdata('is_logged_in')) {
            if (isset($id)) {
                $data['adv_id'] = $this->db_model->all_adv_id($id);
                foreach ($data['adv_id'] as $a) {
                    $img = $a->image;
                }
                if (file_exists("./upload/" . $img)) {
                    unlink('./upload/' . $img);
                    unlink('./upload/thumb_' . $img);
                }
                $result = $this->db_model->deladv($id);
                if ($result == TRUE) {
                    $this->session->set_flashdata('msg', "Advertisement Delete Successfully");
                } else {
                    $this->session->set_flashdata('msg', "Advertisement Not Delete ");
                }
            } else {
                echo 'sorry file not found';
            }
            redirect('dashboard/all_adv');
        } else {
            redirect('login');
        }
    }
    function edit_adv($id) {
        if ($this->session->userdata('is_logged_in')) {
            $data['adv_id'] = $this->db_model->all_adv_id($id);
            $this->load->view('dashboard/design/header');
            $this->load->view('dashboard/design/left');
            $this->load->view('dashboard/adv/edit', $data);
            $this->load->view('dashboard/design/footer');
        } else {
            redirect('login');
        }
    }
    //====================== CLOSED ADVERTISEMENT PART ============================================== //
    //======================= START MEDIA PART ======================================================//
    function all_media() {
        if ($this->session->userdata('is_logged_in')) {
            $data['files'] = $this->db_model->all_file();
            $this->load->view('dashboard/design/header');
            $this->load->view('dashboard/design/left');
            $this->load->view('dashboard/media/list', $data);
            $this->load->view('dashboard/design/footer');
        } else {
            redirect('login');
        }
    }
    function delimg($id = NULL) {
        $data['files'] = $this->db_model->all_file_id($id);
        if (!empty($data['files'])) {
            foreach ($data['files'] as $fl) {
                $file = $fl->file_name;
            }
            if (file_exists('./upload/' . $file)) {
                unlink('./upload/' . $file);
            }
            $result = $this->db_model->delimg($id);
            if ($result == TRUE) {
                $this->session->set_flashdata('msg', "Image Delete Successfully");
            } else {
                $this->session->set_flashdata('msg', "Image Not Delete ");
            }
            redirect('dashboard/all_media');
        } else {
            echo 'Sorry file not found';
        }
    }
    //======================= CLOSED MEDIA PART ==================================================//
}