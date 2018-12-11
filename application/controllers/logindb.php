<?php 
class logindb extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('logindb_model');
    }

    function index(){
        $this->load->view('logindb/logindashboard');
    }

    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE), ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE), ENT_QUOTES);

        $cek_bdpb=$this->logindb_model->auth_bdpb($username,$password);

        if($cek_bdpb->num_rows() > 0){// Jika login dengan BDPB
                $data=$cek_bdpb->row_array();
                $this->session->set_userdata('masuk',TRUE);
                $this->session->set_userdata('akses','1');
                $this->session->set_userdata('ses_id',$data['id']);
                $this->session->set_userdata('ses_nama',$data['nama']);
                redirect('admin');
        }else { // Jika Login Petugas
            $cek_petugas=$this->logindb_model->auth_petugas($username,$password);
            if($cek_petugas->num_rows() > 0) {
                $data=$cek_petugas->row_array();
                $this->session->set_userdata('masuk',TRUE);
                $this->session->set_userdata('akses','2');
                $this->session->set_userdata('ses_id',$data['id']);
                $this->session->set_userdata('ses_nama',$data['nama']);
                redirect('petugas');
            }else {
                $url=base_url('logindb');
                echo $this->session->set_flashdata('msg', 'Username Atau Password Salah');
                redirect($url);
            }
        }
    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('logindb');
        redirect($url);
    }
}