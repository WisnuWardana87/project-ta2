<?php
class M_admin extends CI_Model
{
    function data_role()
    {
        $data = $this->db->get('user_role')->result_array();
        return $data;
    }

    public function countFTK()
    {
        $this->db->where('nama_fakultas', 'Fakultas Teknik dan Kejuruan (FTK)');
        $this->db->where('tahun', date('Y'));;
        $query = $this->db->get('tb_prestasi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function countFMIPA()
    {
        $this->db->where('nama_fakultas', 'Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA)');
        $this->db->where('tahun', date('Y'));;
        $query = $this->db->get('tb_prestasi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function countFE()
    {
        $this->db->where('nama_fakultas', 'Fakultas Ekonomi (FE)');
        $this->db->where('tahun', date('Y'));;
        $query = $this->db->get('tb_prestasi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function countFIP()
    {
        $this->db->where('nama_fakultas', 'Fakultas Ilmu Pendidikan (FIP)');
        $this->db->where('tahun', date('Y'));;
        $query = $this->db->get('tb_prestasi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function countFBS()
    {
        $this->db->where('nama_fakultas', 'Fakultas Bahasa dan Seni (FBS)');
        $this->db->where('tahun', date('Y'));;
        $query = $this->db->get('tb_prestasi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function countFOK()
    {
        $this->db->where('nama_fakultas', 'Fakultas Olahraga dan Kesehatan (FOK)');
        $this->db->where('tahun', date('Y'));;
        $query = $this->db->get('tb_prestasi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function countFHIS()
    {
        $this->db->where('nama_fakultas', 'Fakultas Hukum dan Ilmu Sosial (FHIS)');
        $this->db->where('tahun', date('Y'));;
        $query = $this->db->get('tb_prestasi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function countFK()
    {
        $this->db->where('nama_fakultas', 'Fakultas Kedokteran (FK)');
        $this->db->where('tahun', date('Y'));;
        $query = $this->db->get('tb_prestasi');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
