<?php
class Blog_post_model extends CI_Model {
    
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
    
    public function read($id){
        $query_result = $this->db->get_where("blog_post", ['id' => $id]);
        $blog_post = $query_result->row();
        return $blog_post;
    }
    
    public function update($id, $title, $body){
        $data = [
            "title" => $title,
            "body" => $body
        ];
        
        return $this->db->update("blog_post", $data, ['id'=> $id]);
    }
    
    
    
}
