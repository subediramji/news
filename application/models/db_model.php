<?php

class Db_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    //================ CATEGORY PART ============================
    function insert_categories($categories_name)
    {
        $data = array(
            'name'=>$categories_name
        );
       $this->db->insert('category',$data);
       return ($this->db->affected_rows() != 1 ) ? false:true;
    }
    
    function all_cat()
    {
        $result = $this->db->get('category');
        return $result->result();
    }
    
     function all_cat_id($id)
    {
         $this->db->where('id',$id);
        $result = $this->db->get('category');
        return $result->result();
    }
    
    function delcat($id)
    {
        $this->db->where('id',$id);
         $this->db->delete('category');
        return ($this->db->affected_rows() != 1 ) ? false:true;
    }
    
    function update_categories($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('category',$data);
         return ($this->db->affected_rows() != 1 ) ? false:true;
    }
    function count_cat()
    {
        $result = $this->db->count_all('category');
        return $result;
    }


    //============= NEWS PART======================
    
    function  insert_news($data)
    {
       $this->db->insert('news',$data);
       return ($this->db->affected_rows() != 1 ) ? false:true; 
    }
    function all_news()
    {
        $result = $this->db->get('news');
        return $result->result();
    }
    function delnews($id)
    {
        $this->db->where('id',$id);
         $this->db->delete('news');
        return ($this->db->affected_rows() != 1 ) ? false:true;
    }
    function all_news_id($id)
    {   
        $this->db->where('id',$id);
        $result = $this->db->get('news');
        return $result->result();
    
    }
    function update_news($data,$id)
    {
        $this->db->where('id',$id);
        $this->db->update('news',$data);
         return ($this->db->affected_rows() != 1 ) ? false:true;
    }
    
    function count_news()
    {
        $result = $this->db->count_all('news');
        //var_dump($result);
        return $result;
    }
}