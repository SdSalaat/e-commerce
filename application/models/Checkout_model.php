<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 7/6/17
 * Time: 11:05 AM
 */

class Checkout_model extends CI_Model
{
    function getCart($u_id){
        $query = $this->db->get_where('cart',array('u_id' => $u_id));
        return  $query;
    }

    function maxId($t_id,$t_name){
        $this->db->select_max($t_id, $t_id);
        $query = $this->db->get($t_name);
        return $query;
    }

    function ins($t_name,$data){
        $this->db->insert($t_name,$data);
    }

    function del($id){
        $this->db->delete('cart', array('u_id' => $id));
    }

    function getOrder($oh){
        $query = $this->db->get_where('purchase_history',array('oh' => $oh));
        return  $query;
    }
}