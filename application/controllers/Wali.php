<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Wali extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('wali_m');
		
	}
	
	public function detail($id){
		$data['mSiswa'] = $data['mWali'] = true;
		$data['row'] = $this->wali_m->getById($id);
		$data['content'] = 'siswa/detail_wali';
		$this->load->view('index',$data);
	}

	public function create(){
		$data['mSiswa'] = $data['mWali'] = true;
		$data['content'] = 'siswa/form_wali';
		$this->load->view('index',$data);
	}

	public function update($id){
		$data['mSiswa'] = $data['mWali'] = true;
		$data['edit'] = true;
		$data['row'] = $this->wali_m->getById($id);
		$data['content'] = 'siswa/form_wali';
		$this->load->view('index',$data);
	}

	public function save()
	{
		$id = $this->input->post('idwali',true);
		if($id==''){
			$data = [
				'wali_nama'=>$this->input->post('wali_nama',true),
				'wali_nik'=>$this->input->post('wali_nik',true),
				'wali_tmp_lahir'=>$this->input->post('wali_tmp_lahir',true),
				'wali_tgl_lahir'=>$this->input->post('wali_tgl_lahir',true),
				'wali_negara'=>$this->input->post('wali_negara',true),
				'wali_agama'=>$this->input->post('wali_agama',true),
				'wali_hp'=>$this->input->post('wali_hp',true),
				'wali_pend_terakhir'=>$this->input->post('wali_pend_terakhir',true),
				'wali_pekerjaan'=>$this->input->post('wali_pekerjaan',true),
				'wali_penghasilan'=>$this->input->post('wali_penghasilan',true),
				'wali_nama_ibu'=>$this->input->post('wali_nama_ibu',true),
				'pengguna_id'=>$this->session->userdata('id')
			];
			$this->wali_m->tambahData($data);
			$this->session->set_flashdata('success','Anda berhasil menambahkan data Wali');
		}else{
			$data = [
				'wali_nama'=>$this->input->post('wali_nama',true),
				'wali_nik'=>$this->input->post('wali_nik',true),
				'wali_tmp_lahir'=>$this->input->post('wali_tmp_lahir',true),
				'wali_tgl_lahir'=>$this->input->post('wali_tgl_lahir',true),
				'wali_negara'=>$this->input->post('wali_negara',true),
				'wali_agama'=>$this->input->post('wali_agama',true),
				'wali_hp'=>$this->input->post('wali_hp',true),
				'wali_pend_terakhir'=>$this->input->post('wali_pend_terakhir',true),
				'wali_pekerjaan'=>$this->input->post('wali_pekerjaan',true),
				'wali_penghasilan'=>$this->input->post('wali_penghasilan',true),
				'wali_nama_ibu'=>$this->input->post('wali_nama_ibu',true),
				'pengguna_id'=>$this->session->userdata('id')
			];
			$this->wali_m->editData($data,$id);
			$this->session->set_flashdata('success','Anda berhasil mengubah data Wali');
		}
		redirect(base_url('menu/wali_anak'));
	}

	public function delete($id){
		$del = $this->wali_m->hapusData($id);
		if($del){
			$this->session->set_flashdata('success','Anda berhasil menghapus data Wali');
		}else{
			$this->session->set_flashdata('error','Maaf, data gagal dihapus, data terikat dengan data lainnya !');
		}
		redirect('menu/wali_anak');
	}

}

/* End of file Wali.php */