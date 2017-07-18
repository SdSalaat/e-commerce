<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 7/5/17
 * Time: 5:08 PM
 */

class Checkout extends CI_Controller
{
    function index(){
        $tot = $_GET['tot'];
        if($tot == 0){
            ?>
            <script>
                alert('unable to proceed Please fill Products in Cart');
                window.location = "<?php echo base_url() ?>index.php/cart/viewCart";
            </script>
            <?php
        }
        else{
            $u_id = $_SESSION['u_id'];

            $query = $this->Checkout_model->getCart($u_id);

            $price = 0;
            $qty = 0;
            $total = 0;
            foreach ($query->result() as $row){
                $price = $row->product_price;
                $qty = $row->quantity;
                $total += $price * $qty;
            }

            $data['total'] = $total;

            $this->load->view('checkout',$data);
        }
    }

    function confirmForm(){

        $u_id = $_SESSION['u_id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $add = $_POST['address'];
        $city = $_POST['city'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $netTotal = $_POST['netTotal'];

        $query = $this->Checkout_model->maxId('po_id','pending_orders');

        $po_id = 0;
        foreach($query->result() as $row){
            $po_id = $row->po_id;
        }
        $po_id++;

        $data = array(
            'po_id' => $po_id,
            'u_id' => $u_id,
            'cart_total' => $netTotal,
            'bill_fname' => $fname,
            'bill_lname' => $lname,
            'bill_add' => $add,
            'bill_city' => $city,
            'bill_email' => $email,
            'bill_phone' => $phone
        );


        $this->Checkout_model->ins('pending_orders',$data);

        $query = $this->Checkout_model->maxId('oh','purchase_history');

        $oh = 0;
        foreach($query->result() as $row){
            $oh = $row->oh;
        }
        $oh++;

        $query = $this->Checkout_model->getCart($u_id);



        foreach ($query->result() as $row) {
            $p_name = $row->product_name;
            $p_price = $row->product_price;
            $p_qty = $row->quantity;
            $p_u_id = $row->u_id;


            $data = array(
                'oh' => $oh,
                'p_name' => $p_name,
                'p_price' => $p_price,
                'p_qty' => $p_qty,
                'u_id' => $p_u_id,

            );

            $this->Checkout_model->ins('purchase_history', $data);
        }
        $this->Checkout_model->del($u_id);

        redirect('Welcome/reciept?oh='.$oh);

    }
}