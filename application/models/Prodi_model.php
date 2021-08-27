<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Prodi_model extends CI_Model
{

    public function viewByFakultas($kode_fakultas)
    {
        $this->db->where('kode_fakultas', $kode_fakultas);
        $result = $this->db->get('pp_prodi')->result(); // Tampilkan semua data prodi berdasarkan id kode_fakultas

        return $result;
    }
    function show()
    {
        $hasil = $this->db->query("SELECT * FROM pp_prodi");
        return $hasil;
    }

    function save($kode_prodi, $prodi, $kode_fakultas, $date_created)
    {
        $hasil = $this->db->query("INSERT INTO pp_prodi (kode_prodi, prodi, kode_fakultas, date_created) VALUES ('$kode_prodi', '$prodi', '$kode_fakultas','$date_created')");
    }

    public function delete($kode_prodi)
    {
        // $this->db->where('id', $id);
        $this->db->delete('pp_prodi', ['kode_prodi' => $kode_prodi]);
    }
}
