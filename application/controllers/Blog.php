<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends \CI_Controller
{
    public function __construct(){
        Parent::__construct();
        $this->load->model("blog_post_model");
        $this->load->helper("url");        
    }
    
    public function create()
    {
        if ($this->input->method(TRUE) === "GET"){
            $this->load->view('blog/create');
            return;
        }
        elseif ($this->input->method(TRUE) === "POST"){
            $title = $this->input->post("title");
            $body = $this->input->post("body");
            
            $id = $this->blog_post_model->insert($title, $body);
            redirect("/blog/read/$id");
        }
    }
    
    public function read($id){
        $blog_post = $this->blog_post_model->read($id);
        if ($blog_post === null){
            redirect("/");
        }
        
        $this->load->view("blog/read", ['blog_post' => $blog_post]);
    }
    
    public function update($id){
        $blog_post = $this->blog_post_model->read($id);
        if ($blog_post === null){
            redirect("/");
        }
        
        $this->load->view("blog/update", ['blog_post' => $blog_post]);
    }
    
    
}
