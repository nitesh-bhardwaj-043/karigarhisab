<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Services extends MX_Controller
{
    public function geturl()
    {
        // Load required libraries
        $this->load->library('form_validation');
        $this->load->database();

        // Form validation
        $this->form_validation->set_rules('c_no', 'Certificate No.', 'required|trim');
        $this->form_validation->set_rules('weight', 'Weight', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
             echo json_encode([
            'status' => 0,
            'errors' => validation_errors()
        ]);
        return;
        }

        // Get POST data
        $c_no = $this->input->post('c_no');
        $weight = $this->input->post('weight');

        // DB query (c_no is unique → 0 or 1 row)
        $query = $this->db
            ->where('c_no', $c_no)
            ->where('weight', $weight)
            ->get('products');

        if ($query->num_rows() == 1) {

            // Certificate exists
            $row = $query->row();

            echo json_encode([
                'status' => 1,
                'token' => $row->token
            ]);

        } else {

            // Certificate does NOT exist
            echo json_encode([
                'status' => 2
            ]);
        }
    }

    function homeRelocation()
    {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "home_relocation";
        echo Modules::run('template/layout2', $data);
    }

    function office()
    {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function car()
    {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function courier()
    {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "courier";
        echo Modules::run('template/layout2', $data);
    }

    function luggage()
    {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "luggage";
        echo Modules::run('template/layout2', $data);
    }

    function how()
    {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "how";
        echo Modules::run('template/layout2', $data);
    }
    function service()
    {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "service";
        echo Modules::run('template/layout2', $data);
    }
    function about()
    {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }
    function book()
    {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "book";
        echo Modules::run('template/layout2', $data);
    }
    function contact()
    {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "contact";
        echo Modules::run('template/layout2', $data);
    }
    function policy()
    {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "policy";
        echo Modules::run('template/layout2', $data);
    }


    function preciouss()
    {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "preciouss";
        echo Modules::run('template/layout2', $data);
    }
    function brac()
    {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "brac";
        echo Modules::run('template/layout2', $data);
    }

    function semi()
    {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "semi";
        echo Modules::run('template/layout2', $data);
    }
    function labs()
    {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "labs";
        echo Modules::run('template/layout2', $data);
    }
}
