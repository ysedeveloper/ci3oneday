<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends \CI_Controller
{
    public function create()
    {
        if ($this->input->method(TRUE) === "GET"){
            $this->load->view('blog/create');
            return;
        }
        elseif ($this->input->method(TRUE) === "POST"){
            
        }
    }
}
