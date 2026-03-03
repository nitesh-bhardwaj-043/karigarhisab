<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Expenses extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_expenses');
    }

    function index()
    {
        $this->load->view('data');
    }

    function save_data()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules("name", "Name", "required|trim");
        $this->form_validation->set_rules("description", "Description", "required|trim");
        $this->form_validation->set_rules("price", "Price", "required|trim");
        $this->form_validation->set_rules("expense_date", "Expense Date", "required|trim");
        $this->form_validation->set_rules("category", "Category", "required|trim");

        if ($this->form_validation->run() == TRUE) {
            $data['name'] = trim($_POST['name']);
            $data['description'] = trim($_POST['description']);
            $data['price'] = $_POST['price'];
            $data['expense_date'] = $_POST['expense_date'];
            $data['category'] = $_POST['category'];

            // Check for update or insert
            if (!empty($_POST['id'])) {
                $where['id'] = $_POST['id'];
                echo $this->mdl_expenses->update_data($where, $data);
            } else {
                echo $this->mdl_expenses->add_data($data);
            }
        } else {
            echo validation_errors();
        }
    }


    function view_data()
    {
        $where = null;
        if (isset($_GET['id']))
            $where['id'] = $_GET['id'];

        if (isset($_GET['data']))
            $select = $_GET['data'];
        else
            $select = "*";

        $return = $this->mdl_expenses->view_data($where, $select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }

    function delete_data()
    {
        if (isset($_GET['id']) && $_GET['id']) {

            $where['id'] = $_GET['id'];
            echo $this->mdl_expenses->delete_data($where);
        } else
            echo "Not Deleted";
    }
}
