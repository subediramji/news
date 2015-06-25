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
        $this->db->where('c_id',$id);
        $query = $this->db->get('news');
        return $query->result();
        
    }
    function getSlider()
    {
        $id = '17';
        $this->db->where('c_id',$id);
        $query = $this->db->get('news');
        return $query->result();
    }
    
    function getTechnplogy()
    {
        $id = '14';
        $this->db->where('c_id',$id);
        $query = $this->db->get('news');
        return $query->result();
    }
    
    function letestNews()
    {   $this->db->order_by("id", "desc");
         //$this->db->where('c_id',$id);
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

}
