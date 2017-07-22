<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 6/29/17
 * Time: 9:13 PM
 */

class Shop_model extends CI_Model
{
    function getProd(){
        $query = $this->db->get('products');
        return $query;
    }

    function getProdCat($cat){
        $query = $this->db->get_where('products',array('product_category' =>$cat));
        return $query;
    }
}