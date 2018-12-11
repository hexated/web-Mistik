<?php
    class Admin extends CI_Controller {

        function __construct(){
            parent:: __construct();
            //Validasi jika user belum login
            if($this->session->userdata('masuk') !=TRUE){
                $url=base_url('logindb');
                redirect($url);
            }
        }

        function index(){
            $this->template->load('admin/template', 'admin/dashboard');
            }
    
        function tables() {
                $this->template->load('admin/template', 'admin/table');
            }
        
            function profile() {
                $this->template->load('admin/template', 'admin/profile');
            }
        
            function maps() {
                $this->template->load('admin/template', 'admin/maps');
            }
        
        
    }