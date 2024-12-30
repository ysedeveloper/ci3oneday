<?php
class Blog_model extends CI_Model {
    
    public function __construct()
    {
        $this->load->database();
    }
    
    public function insert($title, $body){
        $data = [
            "title" => $title,
            "body" => $body
        ];
        
        $this->db->insert("blog_post", $data);
        
        return $this->db->insert_id();
    }
    
}
