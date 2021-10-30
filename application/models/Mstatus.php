<?php
    class Mstatus extends CI_Model{
        function isidata($induk,$id){
             $hasil = [];
             $tgl = date('Y-m-d');
             $cek = $this->db->query("SELECT * FROM tb_sds WHERE date(tgl) = '".$tgl."' AND noinduk = '".$induk."' ");
             if($cek->num_rows() == 0){
                $hasil1 = $this->db->query("insert into tb_sds values('".$induk."',".$id.",now()) ");
                if($hasil1){
                    $hasil = $this->db->query("SELECT * FROM tb_sds WHERE date(tgl) = '".$tgl."' AND noinduk = '".$induk."' ");
                }
             }
            return $hasil;
        }
    }
?>