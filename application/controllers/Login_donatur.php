<?php

    class Login_donatur  extends CI_Controller {
        public function index() 
        {
            $data['judul'] = 'Login Donatur';
            $this->load->view('template/header', $data);
            $this->load->view('login_donatur/index');
            
        }
    }