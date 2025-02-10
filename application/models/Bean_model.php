<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bean_model extends CI_Model
{


    // Fungsi untuk mengambil semua data kopi dari tabel Beans
    public function get_all_beans()
    {
        return $this->db->get('tablebeans')->result_array();
    }

    public function get_bean_name()
    {
        $this->db->select('*');
        $this->db->from('tablebeans');
        $this->db->order_by('id', 'ASC'); // Mengurutkan berdasarkan ID secara ascending
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result_array();
    }
}
