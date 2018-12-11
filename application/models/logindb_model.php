<?php
class logindb_model extends CI_Model{
    //cek nip dan password petugas
    function auth_petugas($username,$password){
        $query=$this->db->query("SELECT * FROM petugas WHERE id_petugas='$username' AND pass=MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek nim dan password bdpb
    function auth_bdpb($username,$password){
        $query=$this->db->query("SELECT * FROM bdpb WHERE id='$username' AND pass=MD5('$password') LIMIT 1");
        return $query;
    }
 
}