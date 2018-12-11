<?php
    class Petugas extends CI_Controller {

        function __construct(){
            parent:: __construct();
            //Validasi jika user belum login
            if($this->session->userdata('masuk') !=TRUE){
                $url=base_url('logindb');
                redirect($url);
            }
        }
        
        function index(){
            $this->template->load('petugas/template', 'petugas/dashboard');
            }
    
        function tables() {
                $this->template->load('petugas/template', 'petugas/table');
            }
        
            function profile() {
                $this->template->load('petugas/template', 'petugas/profile');
            }
        
            function maps() {
                $this->template->load('petugas/template', 'petugas/maps');
            }
        
        
    }