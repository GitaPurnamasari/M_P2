<?php
class MAdministrasi extends CI_Model 
{
	public $nim;
	public $nama;
	public $pengajuan;
	public $ket;

	public $labels = [];
	
	function __construct()
	{
		parent :: __construct();
		$this->labels = $this->_attributeLabels();

		$this->load->database();
	}

	public function insert()
	{
		$sql = sprintf("INSERT INTO administrasi VALUES ('%s','%s', '%f', %d)",
						$this->nim,
						$this->nama,
						$this->pengajuan,
						$this->ket
					);
		$this->db->query($sql);
	}
	
	public function read()
	{
		$sql = "SELECT * FROM administrasi ORDER BY nim";
		$query = $this->db->query($sql);
		return $query->result();
	}

	private function _attributeLabels()
	{
		return[
			'nim'=> 'nim : ',
			'nama'=> 'Nama Produk : ',
			'pengajuan'=> 'pengajuan : ',
			'ket'=> 'ket : '
		];
	}
}