<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 6/27/17
 * Time: 4:51 PM
 */

class Login_model extends CI_Model
{
    function checkUser($email,$password){
        $query = $this->db->get_where('users',array('email'=> $email , 'password'=> $password));
        return $query;
    }
}