<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petugas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('message', 'swal("Ops!", "Anda harus login sebagai petugas", "warning");');
            redirect('landing');
        }
    }

	public function index()
	{
        // $this->load->model('M_data');
        // $data = array(
		// 	'jumlahpengaduan' => $this->M_data->jumlahpengaduan(),
		// 	'jumlahall' => $this->M_data->jumlahall(),
		// 	'jumlah0' => $this->M_data->jumlah0(),
		// 	'jumlah1' => $this->M_data->jumlah1(),
		// 	'jumlah2' => $this->M_data->jumlah2(),
        // );

		$data['page_title'] = 'dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/meta', $data);
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar', $data);
		$this->load->view('petugas/index');
		$this->load->view('template/footer');
		$this->load->view('template/js');
	}

    public function akun()
    {
        $this->load->model('M_data');
        $data = array(
            'alluser' => $this->M_data->alluser(),
        );

        $data['page_title'] = 'Panel Akun Admin&petugas';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('petugas/akun/index', $data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }

    public function add_akun()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['page_title'] = 'Panel Tambah Akun';
            $data['title'] = 'DISDUKCAPIL';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template/meta', $data);
            $this->load->view('template/navbar');
            $this->load->view('template/sidebar');
            $this->load->view('petugas/akun/add', $data);
            $this->load->view('template/footer');
            $this->load->view('template/js');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'nip' => htmlspecialchars($this->input->post('nip', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => htmlspecialchars($this->input->post('role_id', true)),
                'is_active' => htmlspecialchars($this->input->post('is_active', true)),
                'image' => 'default.jpg'
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Account has been created!", "success");');
            redirect('petugas/akun');
        }
    }

    public function edit_akun()
    {
        $input =  $this->input->get('id', TRUE);
        $this->load->model('M_data');
        $data = array(
            'edit' => $this->db->get_where('user', ['id' => $input])->row_array(),
        );

        $data['page_title'] = 'Edit Akun';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('petugas/akun/edit', $data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }

    public function update_akun()
    {
        $p = $this->input->post();
        $data = [
            'id'               => $p['id'],
            'nama'                    => $p['nama'],
            'nip'                    => $p['nip'],
            'email'                    => $p['email'],
            'role_id'               => $p['role_id'],
            'is_active'              => $p['is_active'],
        ];

        $this->db->trans_start();
        $this->db->update('user', $data, ['id' => $p['id']]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "data has been updated!", "success");');
        redirect('petugas/akun');
    }

    public function delete_akun($id)
    {
        $this->db->trans_start();
        $this->db->delete('user', ['id' => $id]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been deleted!", "success");');
        redirect('petugas/akun');
    }

    public function tamu()
    {
        $this->load->model('M_data');
        $data = array(
            'alltamu' => $this->M_data->alltamu(),
        );

        $data['page_title'] = 'Panel Daftar Tamu';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('tamu/index', $data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }

    public function edit_tamu()
    {
        $input =  $this->input->get('id_tamu', TRUE);
        $this->load->model('M_data');
        $data = array(
            'edit' => $this->db->get_where('tamu', ['id_tamu' => $input])->row_array(),
        );

        $data['page_title'] = 'Edit tamu';
        $data['title'] = 'DISDUKCAPIL';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar');
        $this->load->view('template/sidebar');
        $this->load->view('tamu/edit', $data);
        $this->load->view('template/footer');
        $this->load->view('template/js');
    }

    public function update_tamu()
    {
        $p = $this->input->post();
        $data = [
            'id_tamu'               => $p['id_tamu'],
            'nama'                    => $p['nama'],
            'jenis_identitas'                    => $p['jenis_identitas'],
            'nomor_identitas'                    => $p['nomor_identitas'],
            'keperluan'                    => $p['keperluan'],
            'created_at'                    => $p['created_at'],
        ];

        $this->db->trans_start();
        $this->db->update('tamu', $data, ['id_tamu' => $p['id_tamu']]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "data has been updated!", "success");');
        redirect('petugas/tamu');
    }

    public function delete_tamu($id_tamu)
    {
        $this->db->trans_start();
        $this->db->delete('tamu', ['id_tamu' => $id_tamu]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been deleted!", "success");');
        redirect('petugas/tamu');
    }
}