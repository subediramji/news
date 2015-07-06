<?php class Db_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
            } 

    function validates($username, $password){
        //$this->db->from('user');
        $this->db->where('password',md5($password));
        $this->db->where('username', $username);
        //var_dump($username." ". md5($password));
        $this->db->get('user');        //print_r($query);
       return ($this->db->affected_rows() != 1 ) ? false : true;
    }
    
    function get_id($username, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('password', md5($password));
		$this->db->where('username', $username);
		$query = $this->db->get();
		return $query->result();
				
	}
        function register($data)
        {
            $this->db->insert('user',$data);
            return ($this->db->affected_rows() != 1 ) ? false : true;
        }

//============================== QUERY FOR VIEW ======================
    function getHeadlines()
    {
        $id = '16';
        $this->db->order_by("id", "desc");
        $this->db->where('c_id',$id);
        $query = $this->db->get('news',6);
        return $query->result();
        
    }
    function getSlider()
    {
        $id = '17';
        $this->db->order_by("id", "desc");
        $this->db->where('c_id',$id);
        $query = $this->db->get('news',5);
        return $query->result();
    }
    
    function getTechnology()
    {
        $id = '14';
        $this->db->where('c_id',$id);
        $this->db->order_by("id", "desc");
        $query = $this->db->get('news',3);
        return $query->result();
    }
    
    function letestNews()
    {   $this->db->order_by("id", "desc");
         //$this->db->where('c_id',$id);
        $query = $this->db->get('news',3);
        return $query->result();
    }
    
    function business()
    {
        $id = '19';
        $this->db->order_by("id", "desc");
        $this->db->where('c_id',$id);
        $query = $this->db->get('news',3);
        return $query->result();
    }
    
    function worldNews()
    {
        $id = '18';
        $this->db->order_by("id", "desc");
        $this->db->where('c_id',$id);
        $query = $this->db->get('news',3);
        return $query->result();
    }
    
    function travel()
    {
        $id = '20';
        $this->db->order_by("id", "desc");
        $this->db->where('c_id',$id);
        $query = $this->db->get('news',3);
        return $query->result();
    }
    function life()
    {
        $id = '21';
        $this->db->order_by("id", "desc");
        $this->db->where('c_id',$id);
        $query = $this->db->get('news',3);
        return $query->result();
    }
    
function culture()
    {
    $id = '22';
        $this->db->order_by("id", "desc");
        $this->db->where('c_id',$id);
        $query = $this->db->get('news',3);
        return $query->result();
    }


    //========================= END QUERY FOR VIEW ================

        //================ CATEGORY PART ============================
    function insert_categories($categories_name) {
        $data = array(
            'name' => $categories_name
        );
        $this->db->insert('category', $data);
        return ($this->db->affected_rows() != 1 ) ? false : true;
    }

    function all_cat() {
        $result = $this->db->get('category');
        return $result->result();
    }

    function all_cat_id($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('category');
        return $result->result();
    }

    function delcat($id) {
        $this->db->where('id', $id);
        $this->db->delete('category');
        return ($this->db->affected_rows() != 1 ) ? false : true;
    }

    function update_categories($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('category', $data);
        return ($this->db->affected_rows() != 1 ) ? false : true;
    }

    function count_cat() {
        $result = $this->db->count_all('category');
        return $result;
    }

    //============= NEWS PART======================

    function insert_news($data) {
        $this->db->insert('news', $data);
        return ($this->db->affected_rows() != 1 ) ? false : true;
    }

    function all_news() {
        $result = $this->db->get('news');
        return $result->result();
    }

    function delnews($id) {
        $this->db->where('id', $id);
        $this->db->delete('news');
        return ($this->db->affected_rows() != 1 ) ? false : true;
    }

    function all_news_id($id) {
        $this->db->where('id', $id);
        $result = $this->db->get('news');
        return $result->result();
    }
    function all_news_cate_id($id) {
        $this->db->where('c_id', $id);
        $result = $this->db->get('news');
        return $result->result();
    }

    function update_news($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('news', $data);
        return ($this->db->affected_rows() != 1 ) ? false : true;
    }

    function count_news() {
        $result = $this->db->count_all('news');
        //var_dump($result);
        return $result;
    }
    function all_file()
    {
         $result = $this->db->get('files');
        return $result->result();
    }
    function delimg($id)
    {
        $this->db->where('file_id', $id);
        $this->db->delete('files');
        return ($this->db->affected_rows() != 1 ) ? false : true;
    }
            function all_file_id($id)
    {
        
        $this->db->where('file_id',$id);
         $result = $this->db->get('files');
        return $result->result();
    }
    
    function insert_adv($data)
    {
         $this->db->insert('adv', $data);
        return ($this->db->affected_rows() != 1 ) ? false : true;
    }
    function  all_adv()
    {
        $result = $this->db->get('adv');
        return $result->result();
    }
    
    function all_adv_id($id)
    {
        $this->db->where('id', $id);
        $result = $this->db->get('adv');
        return $result->result();
    }
    function deladv($id)
    {
         $this->db->where('id', $id);
        $this->db->delete('adv');
        return ($this->db->affected_rows() != 1 ) ? false : true;
    }
    
    function advt()
    {
        $this->db->order_by('id','DESC');
        $this->db->like('location', "1");
        $result = $this->db->get('adv',1);
        return $result->result();
    }
    function advs()
    {
        $this->db->order_by('id','DESC');
        $this->db->like('location', "2");
        $result = $this->db->get('adv',2);
        return $result->result();
    }

}
