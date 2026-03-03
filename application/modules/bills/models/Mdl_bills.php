<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_bills extends CI_Model
{
    private $table = 'products';

    public function get_bill_by_token($token)
    {
        $this->load->database();
        return $this->db
            ->where('token', $token)
            ->get($this->table)
            ->row_array();
    }
}
