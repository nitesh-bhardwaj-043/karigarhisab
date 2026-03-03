<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Records extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('workers/mdl_workers');
        $this->load->model('transactions/mdl_transactions');
    }

    function index()
    {
        $workers = $this->mdl_workers->view_detailed_data()->result_array();
        $data = array(
            'data' => $workers 
        );
        $this->load->view('view', $data);
    }
}
