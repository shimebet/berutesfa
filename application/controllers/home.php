<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->database();
        $this->load->library('session');
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2030 05:00:00 GMT");
    }

    //Default function, redirects to logged in user area
    public function index_home() {
       $this->load->view('backend/index_home');
       if ($this->session->userdata('admin_login') == 1)
       redirect(base_url() . 'index.php?admin/dashboard', 'refresh');
   if ($this->session->userdata('teacher_login') == 1)
       redirect(base_url() . 'index.php?teacher/dashboard', 'refresh');
   if ($this->session->userdata('student_login') == 1)
       redirect(base_url() . 'index.php?student/dashboard', 'refresh');
   if ($this->session->userdata('parent_login') == 1)
       redirect(base_url() . 'index.php?parents/dashboard', 'refresh');
    } 
public function about(){
    $this->load->view('backend/about');
}
public function contact(){
    $this->load->view('backend/contact');
}
public function appointment(){
    $this->load->view('backend/appointment');
}
public function testimonials(){
    $this->load->view('backend/testimonials');
}
public function classes(){
    $this->load->view('backend/classes');
}
public function facility(){
    $this->load->view('backend/facility');
}
public function team(){
    $this->load->view('backend/team');
}

}
