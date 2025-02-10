<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catalog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bean_model'); // Load model untuk mengambil data dari database
    }

    public function index()
    {
        $data['title'] = 'Catalog Coffee Valley';
        $data['beans'] = $this->Bean_model->get_all_beans();
        $this->load->view('templates/header', $data);
        $this->load->view('catalog', $data);
        $this->load->view('templates/footer');
    }
}
