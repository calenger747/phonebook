<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {

	function __construct() {
        parent::__construct();


        $this->load->model('m_user');
    }

	function index() {

        if ($this->session->userdata('level') == "") {
            $this->load->view('admin/login');
        } else if ($this->session->userdata('level') === "admin") {
            $this->load->view('admin/data_buku');   
        }
		
	}

  	function proses() {
        $username    = $this->input->post('username',TRUE);
        $password = md5($this->input->post('password',TRUE));
        $validate = $this->m_user->cek($username,$password);
        if($validate->num_rows() > 0){
            $data  = $validate->row_array();
            $name  = $data['nama_lengkap'];
            $email = $data['username'];
            $level = $data['level'];
            $sesdata = array(
                'username'  => $name,
                'email'     => $email,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // access login for admin
            if($level === 'admin'){
                redirect('buku');
            } else {
                $this->session->set_flashdata('pesan', 'Maaf, Anda bukan administrator');
                redirect('login');
            }
        }else{
            $this->session->set_flashdata('pesan', 'Maaf, kombinasi username dan password salah. Ulangi kembali.');
            redirect('login');
        }
    }

    function logout() {
      $this->session->sess_destroy();
      redirect('login');
    }

}
