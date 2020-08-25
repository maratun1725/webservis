<?php
/** 
 * Model mahasiswa Mar'Atun Solehah 17.11.0017
  */

class MahasiswaModel extends CI_MOdel
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_mahasiswa()
    {
        $data = $this->db->get('mahasiswa')->result();
        return $data;
    }

    public function insert_mahasiswa($arrayData)
    {
        $data = $this->db->insert('mahasiswa', $arrayData);
        return $data ? TRUE : FALSE;
    }
}
