<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fakultas_model extends CI_Model
{
    public function view()
    {
        return $this->db->get('pp_fakultas')->result(); // Tampilkan semua data yang ada di tabel provinsi
    }

    public function show_fakultas()
    {
        $npm = $this->session->userdata('npm');
        $hasil = $this->db->query("SELECT * FROM pp_fakultas");
        return $hasil->result_array();
    }

    function show()
    {
        $hasil = $this->db->query("SELECT * FROM pp_fakultas");
        return $hasil;
    }
    function save($kode_fakultas, $fakultas, $date_created)
    {
        $hasil = $this->db->query("INSERT INTO pp_fakultas (kode_fakultas, fakultas, date_created) VALUES ('$kode_fakultas', '$fakultas','$date_created')");
    }

    public function delete($kode_fakultas)
    {
        // $this->db->where('id', $id);
        $this->db->delete('pp_fakultas', ['kode_fakultas' => $kode_fakultas]);
    }
}
