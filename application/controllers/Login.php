<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function loginUser() {

        $this->form_validation->set_rules('nip','nip','required');
        $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('login_view');

        } else {

            $this->load->model('Login_Model');
            $reslt = $this->Login_Model->checkLogin();

            if ($reslt != false) {

                //set session
                $nip = $_POST['nip'];
                $password = $_POST['password'];

                //fetch from databse
                $this->db->select('*');
                $this->db->from('users');
                $this->db->where(array('nip' => $nip , 'password' => $password));
                $query = $this->db->get();

                $user = $query->row();

                //if use exists
                if ($user->nip) {

                    //login message
                    $this->session->set_flashdata("success","You are logged in");

                    //set session variables
                    $_SESSION['user_logged'] = TRUE;
                    $_SESSION['nip'] = $user->nip;

                    //redirect
                    redirect('user/profile','refresh');

                }


            } else {

                //wrong credentials
                $this->session->set_flashdata('error','NIP atau Password salah!');
                redirect('Home/Login');

            }
        }

    }
    //logging out of a user
    public function logoutUser() {
		unset($_SESSION);
		redirect('Home/Login');
	}
}
