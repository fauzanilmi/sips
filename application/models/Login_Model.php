<?php

class Login_Model extends CI_Model {



    public function checkLogin() {

        //enter username and password
        $nip = $this->input->post('nip',TRUE);
        $password = $this->input->post('password',TRUE);

        //fetch data from database
        $this->db->where('nip',$nip);
        $this->db->where('password',$password);
        $res = $this->db->get('users');

        //check if there's a user with the above inputs
        if ($res->num_rows() == 1) {

            //retrieve the details of the user
            return $res->result();

        } else {

            return false;

        }

    }
}



?>
