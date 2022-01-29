<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reclosing extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('reclosing_m');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $data['reclosing'] = $this->reclosing_m->get_paymentsclose();
        $data['subview'] = 'admin/reclosing/index';
        $this->load->view('admin/_main_layout', $data);   
    }
}