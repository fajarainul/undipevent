<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_Website1 extends CI_Model {

    
    function recent_update() {
        $query= $this->db->query('SELECT * FROM kegiatan_eo ke, profil_eo po WHERE publish=1 AND ke.id_eo=po.id_eo ORDER BY tanggal_update DESC limit 5');
        return $query->result();
    }

}
