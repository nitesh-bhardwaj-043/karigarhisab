<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Transactions extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_transactions');
    }

    /**
     * Normalize an incoming value like "string:2" to just "2".
     * If there is no colon, returns the trimmed original value.
     *
     * @param string $val
     * @return string
     */
    private function normalize_id($val)
    {
        $val = trim($val);
        if ($val === '') {
            return $val;
        }
        $parts = explode(':', $val, 2);
        return isset($parts[1]) ? $parts[1] : $parts[0];
    }

    function index()
    {
        $this->load->view('view');
    }

    function view_data()
    {

        if (isset($_GET['data']))
            $select = $_GET['data'];
        else
            $select = "*";

        $return = $this->mdl_transactions->view_data($select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }

    function get_wallet(){
        $return = $this->mdl_transactions->get_wallet();
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }

    function save_data1()
    {
        // print_r($_POST);
        // die();
        $this->load->library('form_validation');

        // Validation rules (worker and admin are still selected in the form,
        // but for the DB we store explicit admin_id / worker_id and a direction flag)
        $this->form_validation->set_rules("given_by1", "From", "required|trim"); // worker
        $this->form_validation->set_rules("taken_by1", "To", "required|trim");   // admin
        $this->form_validation->set_rules("grams1", "Grams", "required|trim");

        if ($this->form_validation->run() == TRUE) {
            $worker_id = (int) trim($this->normalize_id($_POST['given_by1']));
            $admin_id = (int) trim($this->normalize_id($_POST['taken_by1']));;
            $grams = trim($_POST['grams1']);

            $data = array(
                'admin_id'  => $admin_id, // should match session owner_id
                'worker_id' => $worker_id,
                'direction' => 2, // worker -> admin
                'grams'     => $grams
            );

            // worker gives to admin => admin wallet increases
            $this->mdl_transactions->add_wallet($grams);
            echo $this->mdl_transactions->add_data($data);
        } else {
            echo validation_errors();
        }
    }
    function save_data2()
    {
        // print_r($_POST);
        // die();
        $this->load->library('form_validation');

        // Validation rules
        $this->form_validation->set_rules("given_by2", "From", "required|trim"); // admin
        $this->form_validation->set_rules("taken_by2", "To", "required|trim");   // worker
        $this->form_validation->set_rules("grams2", "Grams", "required|trim");

        if ($this->form_validation->run() == TRUE) {
            $admin_id = (int) trim($this->normalize_id($_POST['given_by2']));
            $worker_id = (int)  trim($this->normalize_id($_POST['taken_by2']));
            $grams = trim($_POST['grams2']);

            $data = array(
                'admin_id'  => $admin_id,
                'worker_id' => $worker_id,
                'direction' => 1, // admin -> worker
                'grams'     => $grams
            );

            // admin gives to worker => admin wallet decreases
            $this->mdl_transactions->sub_wallet($grams);
            echo $this->mdl_transactions->add_data($data);
        } else {
            echo validation_errors();
        }
    }
}
