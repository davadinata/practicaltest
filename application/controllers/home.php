<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bean_model'); // Load model untuk mengambil data dari database
    }

    public function index()
    {
        $data['title'] = 'Home Coffee Valley';
        $data['beans'] = $this->Bean_model->get_all_beans(); // Ambil data dari database
        $data['name'] = $this->Bean_model->get_bean_name();

        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
}
