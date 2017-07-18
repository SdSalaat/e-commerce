<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 6/23/17
 * Time: 2:10 AM
 */

class Register_model extends CI_Model
{
    function maxId(){
        $this->db->select_max('u_id', 'u_id');
        $query = $this->db->get('users');
        return $query;
    }

    function insertUser($data){
        $query = $this->db->insert('users',$data);
        return $query;
    }
}