<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 6/30/17
 * Time: 5:20 PM
 */

class Single_model extends CI_Model
{
    function getPro($id){
        $query = $this->db->get_where('products',array('p_id' => $id));
        return $query;
    }

    function rel_pro(){
        $query = $this->db->get('products');
        return $query;
    }
}