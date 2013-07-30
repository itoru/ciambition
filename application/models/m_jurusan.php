<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_jurusan extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insert($params){
		$sql = "INSERT INTO jurusan (kd_jurusan,nama_jurusan)
				VALUES (?, ?)";
		return $this->db->query($sql, $params) ;
	}

	public function update($params){
		$sql = "UPDATE jurusan SET nama_jurusan = ? WHERE kd_jurusan = ?";
		return $this->db->query($sql , $params);
	}

	public function delete($params){
		$sql = "DELETE FROM jurusan WHERE kd_jurusan = ?";
		return $this->db->query($sql, $params);
	}

	public function get_all_jurusan(){
		$sql = "SELECT * FROM jurusan";
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0) {
			return $query->result();
		}else{
			return array();
		}
	}

}

/* End of file mahasiswa.php */
/* Location: ./application/models/mahasiswa.php */