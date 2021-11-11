<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata_m extends CI_Model {

	private $table = 'siswa';

	private $id = 'idsiswa';

	public function getData(){ 
		return $this->db->get($this->table)->result_array();
	}

	public function getAll(){ 
		return $this->db->select('x.*,x1.*')
						->join('orang_tua x1','x1.idorang_tua=x.orang_tua_id')
						->order_by('x.orang_tua_id','DESC')
						->get($this->table.' x')->result_array();
	}

	public function getBayar(){ 
		return $this->db->select('x.*,x1.*')
						->join('pembayaran x1','x1.siswa_id=x.idsiswa')
						->order_by('x.idsiswa','DESC')
						->get($this->table.' x')->result_array();
	}

	public function getBayarBySiswa($id){ 
		return $this->db->select('x.*,x1.*')
						->join('pembayaran x1','x1.siswa_id=x.idsiswa')
						->where('x1.siswa_id',$id)
						->order_by('x.idsiswa','DESC')
						->get($this->table.' x')->result_array();
	}

	public function getById($id){ 
		return $this->db->select('x.*,x1.*')
						->join('orang_tua x1','x1.idorang_tua=x.orang_tua_id')
						->where($this->id,$id)
						->get($this->table.' x')->row_array();
	}

	public function getByOrtu($id){ 
		return $this->db->select('x.*,x1.*')
						->join('orang_tua x1','x1.idorang_tua=x.orang_tua_id')
						->where('x.orang_tua_id',$id)
						->get($this->table.' x')->result_array();
	}

	public function tambahData($data){
		$this->db->insert($this->table,$data);
	}

	public function uploadDokumen($data)
	{
		$this->db->insert('dokumen',$data);
	}

	public function addBayar($data)
	{
		$this->db->insert('pembayaran',$data);
	}

	public function editData($data,$id){
		$this->db->update($this->table,$data,[$this->id=>$id]);
	}

	public function terimaSiswa($id)
	{
		$data = [
			"status" => 'Diterima'
		];
		$this->db->update($this->table, $data,[$this->id=>$id]);
	}
	public function tolakSiswa($id)
	{
		$data = [
			"status" => 'Ditolak'
		];
		$this->db->update($this->table, $data,[$this->id=>$id]);
	}

	public function hapusDok($id){
		return $this->db->delete('dokumen',['iddokumen'=>$id]);
	}

	public function hapusBayar($id){
		return $this->db->delete('pembayaran',['idpembayaran'=>$id]);
	}

	public function hapusData($id){
		return $this->db->delete($this->table,[$this->id=>$id]);
	}

}

/* End of file Biodata_m.php */