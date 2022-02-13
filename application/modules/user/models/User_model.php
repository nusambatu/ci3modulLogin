<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getNamaOpd()
    {
        $query = "SELECT `user`.*, `nama_opd`.`nama_opd`
                  FROM `user` JOIN `nama_opd`
                  ON `user`.`id_opd` = `nama_opd`.`id`
                ";
        return $this->db->query($query)->row_array();
    }
}