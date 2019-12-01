<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->library('form_validation');
		if (!$this->session->userdata('email')) {
			redirect('auth');
		}
		if ($this->session->userdata('role_id') != 2) {
			redirect('auth');
		}
	}
	public function index()
	{
		$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('tbl_login', ['EMAIL' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/headerUser', $data);
		$this->load->view('templates/sidebarUser', $data);
		$this->load->view('templates/topbarUser', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footerUser');
	}
	public function profile()
	{
		$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('tbl_login', ['EMAIL' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/headerUser', $data);
		$this->load->view('templates/sidebarUser', $data);
		$this->load->view('templates/topbarUser', $data);
		$this->load->view('user/profile', $data);
		$this->load->view('templates/footerUser');
	}
	public function editprofile()
	{
		$data['title'] = 'Edit Profile';
		$this->form_validation->set_rules('name', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		if ($this->form_validation->run()) {
			$this->_save_profile();
		} else {
			$data['user'] = $this->db->get_where('tbl_login', ['EMAIL' => $this->session->userdata('email')])->row_array();
			$data['user_edit'] = $this->m_user->get_data();
			$this->load->view('templates/headerUser', $data);
			$this->load->view('templates/sidebarUser', $data);
			$this->load->view('templates/topbarUser', $data);
			$this->load->view('user/edit_profile', $data);
			$this->load->view('templates/footerUser');
		}
	}
	private function _save_profile()
	{
		$nama = $this->input->post('name');
		$email = $this->input->post('email');

		if ($this->m_user->edit_data($nama, $email)) {
			$this->session->set_flashdata('message', '<div class="alert alert-sucess" role="alert">Password Berhasil diganti. silahkan loginulang.</div>');
			redirect('user/profile');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password tidakti. silahkan loginulang.</div>');
			redirect('user/editprofile');
		}
	}
	public function lesprivate()
	{
		$data['title'] = 'Les Private';
		$data['user'] = $this->db->get_where('tbl_login', ['EMAIL' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/headerUser', $data);
		$this->load->view('templates/sidebarUser', $data);
		$this->load->view('templates/topbarUser', $data);
		$this->load->view('user/lesprivate', $data);
		$this->load->view('templates/footerUser');
	}
	public function lesreguler()
	{
		$data['title'] = 'Les Private';
		$data['user'] = $this->db->get_where('tbl_login', ['EMAIL' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/headerUser', $data);
		$this->load->view('templates/sidebarUser', $data);
		$this->load->view('templates/topbarUser', $data);
		$this->load->view('user/lesreguler', $data);
		$this->load->view('templates/footerUser');
	}
	public function daftarles()
	{
		$data['title'] = 'Registrasi les';
		$data['user'] = $this->db->get_where('tbl_login', ['EMAIL' => $this->session->userdata('email')])->row_array();
		$data['user_edit'] = $this->m_user->get_data();
		$this->load->view('templates/headerUser', $data);
		$this->load->view('templates/sidebarUser', $data);
		$this->load->view('templates/topbarUser', $data);
		$this->load->view('user/regisles', $data);
		$this->load->view('templates/footerUser');
	}

	private function _tambah_aksi()
	{
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$umur = $this->input->post('umur');
		$bapak = $this->input->post('bapak');
		$ibu = $this->input->post('ibu');
		$nohp = $this->input->post('nohp');
		$jk = $this->input->post('jk');
		$jenjang = $this->input->post('jenjang');
		$paket = $this->input->post('paket');


		$data = array(
			'NAMA' => $nama,
			'ALAMAT' => $alamat,
			'UMUR' => $umur,
			'NAMA_BAPAK' => $bapak,
			'NAMA_IBU' => $ibu,
			'NO_HP' => $nohp,
			'ID_JK' => $jk,
			'ID_JENJANG' => $jenjang,
			'ID_PAKET' => $paket
		);
		$this->m_data->input_data($data, 'tbl_pendaftaran');
		redirect('user/index');
	}
}
