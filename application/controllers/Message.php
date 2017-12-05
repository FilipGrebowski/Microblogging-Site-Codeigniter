// author: Filip Grebowski

<?php

defined('BASEPATH') OR exit ('No direct script access allowed');

class Message extends CI_Controller {

    public function index() {
        /*print_r($this->session->all_userdata());*/

        if ($this->session->username == "") {
            $this->load->view('Login');
        }
        else {
            $this->load->view('Post');
        }
    }

    public function doPost() {
        if ($this->session->username == "") {
            $this->load->view('Login');
        }
        else {
            $this->load->model('Messages_model');
            $poster = $this->session->username;
            $string = $this->input->post('message-box');
            $this->Messages_model->insertMessage($poster, $string);

            redirect('/user/view/' . $poster);
        }
    }

}
