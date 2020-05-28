<?php

    class Cart_model extends CI_Model
    {
        function check_pro($id,$u_id){
            $this->db->where('p_id',$id);
            $this->db->where('u_id',$u_id);
            $query = $this->db->get('cart');
            return $query;
        }

        function find_max(){
            $this->db->select_max('c_id', 'c_id');
            $query = $this->db->get('cart');
            return $query;
        }

        function insPro($data){
            $this->db->insert('cart',$data);
        }

        function upd_pro($qty,$id,$u_id){
            $this->db->set('quantity',$qty);
            $this->db->where('p_id', $id);
            $this->db->where('u_id', $u_id);
            $this->db->update('cart');
        }

        function get_cart($id){
            $query = $this->db->get_where('cart',array('u_id' => $id));
            return $query;
        }

        function check_prod($p_id){
            $query = $this->db->get_where('products',array('p_id' => $p_id));
            return $query;
        }

        function del_item($id,$u_id){
            $this->db->where('p_id', $id );
            $this->db->where('u_id' , $u_id );
            $this->db->delete('cart');
        }

    }
