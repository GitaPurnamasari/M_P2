<?php

class Administrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url_helper');
        $this->load->model('MAdministrasi');
    }

    public function index()
    {
        if (isset($_POST['submit']))
        {
            $this->load->view('administrasi/admin_page');
        }
        else
        {
            $this->load->view('administrasi/index');
        }
    }
    public function admin_page()
    {
        $this->load->view('administrasi/admin_page');
    }
    public function logout()
    {
        $this->session->unset_userdata(array('nim' => ''));
        // $this->session->sess_destroy();
        redirect('administrasi/index');
    }
    
}