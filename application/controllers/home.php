<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home/index');
	}

	public function tamu()
	{
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');

        if ($this->form_validation->run() == false) {
		$this->load->view('home/tamu');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'jenis_identitas' => htmlspecialchars($this->input->post('jenis_identitas', true)),
                'nomor_identitas' => htmlspecialchars($this->input->post('nomor_identitas', true)),
                'keperluan' => htmlspecialchars($this->input->post('keperluan', true)),
            ];

            $this->db->insert('tamu', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been created!", "success");');
            redirect('home/tamu');
        }
	}
}