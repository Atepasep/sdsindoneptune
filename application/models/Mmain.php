<?php
    class Mmain extends CI_Model{
        function cekdata($id){
            $hasil = $this->db->query("select * from mperson where idkey ='".$id."' ");
            return $hasil;
        }
    }
?>