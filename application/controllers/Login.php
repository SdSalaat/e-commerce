<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 6/27/17
 * Time: 4:46 PM
 */

class Login extends CI_Controller
{
    function index(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = $this->Login_model->checkuser($email,$password);
        $u_id = '';
        foreach ($query->result() as $row){
            $u_id = $row->u_id;
            $fname = $row->fname;
            $lname = $row->lname;
            $username = $row->username;
            $email = $row->email;
            $status = $row->status;
        }

        if($u_id == ''){
            $data['log_err'] = 'Invalid Username or Password';
            $this->load->view('login',$data);
        }
        else{

            $sess_data =array(
                'u_id' => $u_id,
                'dis_name' => $fname ." ". $lname,
                'username' => $username,
                'email' => $email,
                'status' => $status
            );

            $this->session->set_userdata($sess_data);

            //$this->load->view('index');
            redirect('Welcome');
        }
    }

    function logout(){
        $array_items = array('username', 'email','u_id','dis_name');
        $this->session->unset_userdata($array_items);
        session_destroy();
        /*$this->load->view('index');*/
        redirect('Welcome');
    }
}