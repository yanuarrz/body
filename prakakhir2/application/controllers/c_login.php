<?php
class c_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('v_login');
    }

    function login()
    {
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $this->form_validation->set_rules('user', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');
        if ($this->form_validation->run() != false) {
            $hasil = $this->cek->usercek($user, $pass);
            if ($hasil == true) {
                $this->session->set_userdata('username', $user);

                $pengguna['sekarang'] = $this->session->userdata('username');
                $this->load->view('v_succes', $pengguna);
            } else {
                $this->load->view('v_login');
            }
        } else {
            $this->load->view('v_login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }
}
