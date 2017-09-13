<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('demo/landing');
        $this->load->view('templates/footer');
    }

}