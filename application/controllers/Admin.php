<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 6/29/17
 * Time: 2:02 PM
 */

class Admin extends CI_Controller
{
    function index()
    {
        if (isset($_SESSION['email'])) {
            if ($_SESSION['status'] == 'admin') {
                $query = $this->Admin_model->getProd();
                $prods = $query->result();
                $data['prods'] = $prods;

                $this->load->view('admin', $data);
            }
        }
        else {
            $this->load->view('index.html');
        }
    }

    public function do_upload()
    {
        if (isset($_SESSION['email'])) {
            if ($_SESSION['status'] == 'admin') {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('add_pro', $error);
                } else {
                    $pro_name = $_POST['pro_name'];
                    $pro_cat = $_POST['pro_cat'];
                    $pro_price = $_POST['pro_price'];
                    $product_des = $_POST['product_des'];
                    $file_name = $this->upload->data('file_name');
                    $file_path = $this->upload->data('file_path');
                    $file_ext = $this->upload->data('file_ext');
                    $p_id = '';

                    $query = $this->Admin_model->pID();

                    foreach ($query->result() as $row) {
                        $p_id = $row->p_id;
                    }

                    $p_id++;


                    $data = array(
                        'p_id' => $p_id,
                        'product_name' => $pro_name,
                        'product_category' => $pro_cat,
                        'product_price' => $pro_price,
                        'product_des' => $product_des,
                        'file_name' => $file_name,
                        'file_path' => $file_path,
                        'file_ext' => $file_ext,
                    );

                    $this->Admin_model->addProd($data);

                    $data['suc_mess'] = 'Product Sucessfully Added';

                    $this->load->view('add_pro', $data);
                }
            }
        }
        else{
            $this->load->view('index.html');
        }
    }


    function delPro()
    {
        if (isset($_SESSION['email'])) {
            if ($_SESSION['status'] == 'admin') {
                $id = $_GET['id'];

                $this->Admin_model->del_pro($id);

                redirect('Admin');
            }
        }
        else{
            $this->load->view('index.html');
        }
    }

    function editPro()
    {
        if (isset($_SESSION['email'])) {
            if ($_SESSION['status'] == 'admin') {
                $id = $_GET['id'];

                $query = $this->Admin_model->edit_pro($id);

                $data['edPro'] = $query->result();

                $this->load->view('edit_pro', $data);
            }
        }
        else{
            $this->load->view('index.html');
        }
    }

    function updatePro()
    {
        if (isset($_SESSION['email'])) {
            if ($_SESSION['status'] == 'admin') {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('userfile')) {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('edit_pro', $error);
                } else {
                    $pro_name = $_POST['pro_name'];
                    $pro_cat = $_POST['pro_cat'];
                    $pro_price = $_POST['pro_price'];
                    $product_des = $_POST['product_des'];
                    $file_name = $this->upload->data('file_name');
                    $file_path = $this->upload->data('file_path');
                    $file_ext = $this->upload->data('file_ext');
                    $id = $_POST['id'];

                    $data = array(
                        'product_name' => $pro_name,
                        'product_category' => $pro_cat,
                        'product_price' => $pro_price,
                        'product_des' => $product_des,
                        'file_name' => $file_name,
                        'file_path' => $file_path,
                        'file_ext' => $file_ext,
                    );

                    $this->Admin_model->upd_pro($id, $data);

                    $data['suc_mess'] = 'Product Sucessfully Updated';

                    $this->load->view('edit_pro', $data);
                }
            }
        }
        else{
            $this->load->view('index.html');
        }
    }

    function order()
    {
        if (isset($_SESSION['email'])) {
            if ($_SESSION['status'] == 'admin') {
                $query = $this->Admin_model->getOrders();

                $data['order1'] = $query->result();

                $this->load->view('orders', $data);
            }
        }
        else {
            $this->load->view('index.html');
        }
    }

    function changeStatus()
    {
        if (isset($_SESSION['email'])) {
            if ($_SESSION['status'] == 'admin') {
                $po_id = $_GET['po_id'];

                $this->Admin_model->updStatus($po_id, 'delivered');

                redirect('Admin/order');
            }
        }
        else {
            $this->load->view('index.html');
        }
    }
}