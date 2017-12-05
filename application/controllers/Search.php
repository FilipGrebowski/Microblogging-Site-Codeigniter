// author: Filip Grebowski

<?php

defined('BASEPATH') OR exit ('No direct script access allowed');

class Search extends CI_Controller {

    public function index() {

        if ($this->session->username == "") {
            $this->load->view('Login');
        }
        else {
            $this->load->view('Search');
        }
    }

    public function doSearch() {
        $this->load->model('Messages_model');
        $string = $_GET['search'];
        $data = $this->Messages_model->searchMessages($string);
        $viewData = array("results" => $data);
        $this->load->view('ViewMessages', $viewData);
    }
}
