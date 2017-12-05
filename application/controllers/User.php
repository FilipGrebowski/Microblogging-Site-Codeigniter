// author: Filip Grebowski

<?php

defined('BASEPATH') OR exit ('No direct script access allowed');

class User extends CI_Controller {

    public function view($name) {
        $this->load->model('Messages_model');
        $data = $this->Messages_model->getMessagesByPoster($name);
        $viewData = array("results" => $data);
        $this->load->view('ViewMessages', $viewData);
    }

    public function login() {
        $this->load->view('Login');
    }

    public function doLogin() {
        $username = $this->input->post('username');
        $pass = $this->input->post('password');
        $this->load->model('Users_model');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required',
            array('required' => 'You must provide a %s.')
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('Login');
        }
        elseif ($this->Users_model->checkLogin($username, $pass) == false) {
            $this->load->view('Login');
        }
        else {
            $this->Users_model->checkLogin($username, $pass);

            // Storing the data we want the session to hold for the current user
            $sessionData = array (
                'username' => $username,
                'logged_in' => true
            );

            // Session set containing the users username.
            $this->session->set_userdata($sessionData);

            redirect('/user/view/' . $username);
        }
    }

    public function logout() {
        $sessionData = array('username', 'logged_in');
        $this->session->unset_userdata($sessionData);
        $this->load->view('Login');
    }
}
