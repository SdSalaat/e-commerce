<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 6/22/17
 * Time: 3:26 AM
 */

class Register extends CI_Controller
{
    function index(){

        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password_conf', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->load->view('register');
        }
        else {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $id = "";

            $query = $this->Register_model->maxId();

            foreach($query->result() as $row) {
                 $id = $row->u_id;
            }

            $id++;

            $data = array(
                'u_id' => $id,
                'fname' => $fname,
                'lname' => $lname,
                'username' => $username,
                'email' => $email,
                'status' => "user",
                'password' => $password
            );

            $this->Register_model->insertUser($data);

            $this->load->view('login');
        }
    }
}
