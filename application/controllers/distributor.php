<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Distributor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Distributor_model');
    }

    public function index()
    {
        $data['title'] = 'Distributor Coffee Valley';
        $data['dis'] = $this->Distributor_model->get_all_distributor();
        $this->load->view('templates/header', $data);
        $this->load->view('distributor', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        $data['title'] = 'Add Coffee Valley';
        $data['countries'] = $this->Distributor_model->get_countries();
        $this->load->view('templates/header', $data);
        $this->load->view('distributor_add');
        $this->load->view('templates/footer');
    }

    public function insert()
    {
        $data = [
            'distributor_name' => $this->input->post('distributor_name'),
            'city' => $this->input->post('city'),
            'state_region' => $this->input->post('state_region'),
            'country' => $this->input->post('country'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email')
        ];
        $this->Distributor_model->add($data);
        redirect('distributor');
    }
}
