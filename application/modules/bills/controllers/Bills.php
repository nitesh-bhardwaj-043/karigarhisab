<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bills extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mdl_bills');
    }

    public function view($token = null)
    {
        // echo "page loaded";
        if (!$token) {
            // show_404();
            echo "Not Find Data token";
            return;
        }
        
        $bill = $this->Mdl_bills->get_bill_by_token($token);
        
        if (!$bill) {
            // show_404();
            echo "Not Find Data bill";
            return;
        }
        // die();

        $data['bill'] = $bill;
        // print_r($data['bill']);

        $data['title'] = 'Gemstone Identification Report | Anayna Labs';
        $data['description'] = 'Official gemstone identification report issued by Anayna Labs. View authenticated certification details securely using the QR code.';
        $data['module'] = "bills";
        $data['view_file'] = "view";
        echo Modules::run('template/layout2', $data);
    }
}
