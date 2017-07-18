<?php

class Cart extends CI_Controller
{
    function index()
    {
        if (isset($_SESSION['email']) == null) {
            $this->load->view('login');
        } else {
            $id = $_GET['id'];
            $u_id = $_SESSION['u_id'];

            $query = $this->Cart_model->check_pro($id, $u_id);

            $id = "";
            foreach ($query->result() as $row) {
                $id = $row->p_id;
            }


            if ($id == "") {
                $query = $this->Cart_model->find_max();
                $c_id = 0;
                foreach ($query->result() as $row) {
                    $c_id = $row->c_id;
                }

                $c_id++;

                $c_id;
                $id = $_GET['id'];

                $query = $this->Cart_model->check_prod($id);

                foreach ($query->result() as $row) {
                    $p_id = $row->p_id;
                    $pro_name = $row->product_name;
                    $pro_price = $row->product_price;
                    $file_name = $row->file_name;
                }

                $u_id = $_SESSION['u_id'];
                $quantity = 1;

                $data = array(
                    'c_id' => $c_id,
                    'p_id' => $p_id,
                    'product_name' => $pro_name,
                    'product_price' => $pro_price,
                    'file_name' => $file_name,
                    'quantity' => $quantity,
                    'u_id' => $u_id
                );


                $this->Cart_model->insPro($data);
                redirect('Shop');
            } else {
                $id;
                $qty = 0;
                foreach ($query->result() as $row) {
                    $qty = $row->quantity;
                }
                $qty++;

                $u_id = $_SESSION['u_id'];

                $this->Cart_model->upd_pro($qty, $id,$u_id);
                redirect('Shop');
            }
        }
    }

    function viewCart()
    {
        $id = $_SESSION['u_id'];

        $query = $this->Cart_model->get_cart($id);

        $data['v_cart'] = $query->result();
        $this->load->view('cart', $data);
    }

    function editQty()
    {
        echo $todo = $_GET['todo'];
        $id = $_GET['p_id'];
        $u_id = $_SESSION['u_id'];
        if ($todo == '-') {
            $query = $this->Cart_model->check_pro($id,$u_id);

            foreach ($query->result() as $row) {
                $qty = $row->quantity;
            }
            $qty--;
            $this->Cart_model->upd_pro($qty, $id,$u_id);
            redirect('Cart/viewCart');
        } elseif ($todo == '--') {
            $query = $this->Cart_model->check_pro($id,$u_id);

            foreach ($query->result() as $row) {
                $qty = $row->quantity;
            }
            $qty++;
            $this->Cart_model->upd_pro($qty, $id,$u_id);
            redirect('Cart/viewCart');
        }
    }

    function delItem(){
        $id = $_GET['id'];
        $u_id = $_SESSION['u_id'];

        $this->Cart_model->del_item($id,$u_id);

        redirect('Cart/viewCart');
    }

}