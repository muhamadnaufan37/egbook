<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
	
	public function index()
	{
        if ($this->session->userdata('email')) {
            redirect('notfound');
        }

        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == false) {
		$this->load->view('landing/index');
		} else {
			//validasinya success
			$this->_login();
		}
	}

    private function _login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // usernya ada
        if ($user) {

            // usernya aktif
            // usernya aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'id' => $user['id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('superadmin');
                    }  elseif ($user['role_id'] == 2) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', 'swal("Danger!", "Wrong Password!", "error");');
                    redirect('landing');
                }
            } else {
                $this->session->set_flashdata('message', 'swal("Danger!", "This email has not been activated!", "error");');
                redirect('landing');
            }
        } else {
            $this->session->set_flashdata('message', 'swal("Danger!", "Email is not registered!", "error");');
            redirect('landing');
        }
    }

	public function register()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required|trim');
		$this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'This email has already registered!'
		]);
		$this->form_validation->set_rules('nip', 'nip', 'required|trim|is_unique[user.nip]', [
			'is_unique' => 'This Number has already registered!',
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
	
		if ($this->form_validation->run() == false) {
		$this->load->view('landing/page/register');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'nip' => htmlspecialchars($this->input->post('nip', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 1
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! account has been created</div>');
            redirect('landing');
        }
	}

    public function logout() {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', 'swal("Berhasil!", "You have been logged out!", "success");');
        redirect('landing');
    }
}
