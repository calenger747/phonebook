<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct(){
		
		parent ::__construct();

		if($this->session->userdata('logged_in') !== TRUE){
      		redirect('login');
    	}

		//load model
        $this->load->model('m_user');
	}

	public function index()
	{
		$data = array(

			'title' 	=> 'Data Buku',
			'data_buku'	=> $this->m_user->get_all(),

		);
		
		$this->load->view('admin/data_buku', $data);
	}

	public function tambah()
	{
		$data = array(

			'title' 	=> 'Tambah Data Buku'

		);

		$this->load->view('admin/tambah_buku', $data);
	}

	public function simpan()
	{
		$data = array(

			'nama' 			=> $this->input->post("nama"),
			'organisasi' 	=> $this->input->post("organisasi"),
			'jabatan' 		=> $this->input->post("jabatan"),
			'telp' 			=> $this->input->post("telp"),
			'fax' 			=> $this->input->post("fax"),
			'no_hp_1' 		=> $this->input->post("no_hp_1"),
			'no_hp_2'	 	=> $this->input->post("no_hp_2"),
			'no_hp_3' 		=> $this->input->post("no_hp_3"),
			'email' 		=> $this->input->post("email"),
			'note' 			=> $this->input->post("note"),
			
		);

		$this->m_user->simpan($data);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
			<button type="button" class="close" data-dismiss="alert">&times</button>
			                                    </div>');

		//redirect
		redirect('buku/');

	}

	public function edit($id)
	{
		$id = $this->uri->segment(3);

		$data = array(

			'title' 	=> 'Edit Data Buku',
			'data_buku' => $this->m_user->edit($id)

		);

		$this->load->view('admin/edit_buku', $data);
	}

	public function detail($id)
	{
		$id = $this->uri->segment(3);

		$data = array(

			'title' 	=> 'Detail Data',
			'data_buku' => $this->m_user->edit($id)

		);

		$this->load->view('admin/detail_buku', $data);
	}

	public function update()
	{
		$id['id'] = $this->input->post("id");
		$data = array(

			'nama' 			=> $this->input->post("nama"),
			'organisasi' 	=> $this->input->post("organisasi"),
			'jabatan' 		=> $this->input->post("jabatan"),
			'telp' 			=> $this->input->post("telp"),
			'fax' 			=> $this->input->post("fax"),
			'no_hp_1' 		=> $this->input->post("no_hp_1"),
			'no_hp_2'	 	=> $this->input->post("no_hp_2"),
			'no_hp_3' 		=> $this->input->post("no_hp_3"),
			'email' 		=> $this->input->post("email"),
			'note' 			=> $this->input->post("note"),
			
		);

		$this->m_user->update($data, $id);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> 
			Success! data berhasil diupdate didatabase.
			<button type="button" class="close" data-dismiss="alert">&times</button>
			                                    </div>');

		//redirect
		redirect('buku/');

	}

	public function hapus($id)
	{
		$id['id'] = $this->uri->segment(3);
		
		$this->m_user->hapus($id);

		$this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil dihapus didatabase.
			<button type="button" class="close" data-dismiss="alert">&times</button>
			                                    </div>');

		//redirect
		redirect('buku/');

	}

	public function export_data_excel(){
		$data = $this->m_user->get_excel();
		$this->load->view('admin/excel' , ['data'=>$data]);
	}

}
