<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_transactions extends CI_Model
{
    private $table;
    private $table2;
    private $admin_id;
    function __construct()
    {
        parent::__construct();
        $this->table = "transactions";
        $this->table2 = "wallet";
        $CI = &get_instance();
        $this->admin_id = (int) $CI->session->userdata('admin_id');
    }
    function add_data($data)
    {
        $a = $this->db->insert($this->table, $data);
        return $this->db->affected_rows($a);
    }
    function view_data($where = null, $select = "*")
    {
        $this->db->select($select . ', workers.name as worker_name'); // add worker name

        $this->db->from($this->table); // transactions table

        $this->db->join('workers', 'workers.id = ' . $this->table . '.worker_id', 'left');

        if ($this->admin_id) {
            $this->db->where($this->table . '.admin_id', $this->admin_id);
        }

        if (!empty($where) && $where !== "*") {
            $this->db->where($where);
        }

        $this->db->order_by($this->table . '.id', "desc");

        return $this->db->get();
    }
    function get_wallet()
    {
        if ($this->admin_id) {
            $this->db->where('admin_id', $this->admin_id);
        }
        return $this->db->get($this->table2);
    }
    function add_wallet($grams)
    {
        $this->db->set('grams', 'grams + ' . $grams, FALSE);
        if ($this->admin_id) {
            $this->db->where('admin_id', $this->admin_id);
        }
        $this->db->update($this->table2);
        return $this->db->affected_rows();
    }
    function sub_wallet($grams)
    {
        $this->db->set('grams', 'grams - ' . $grams, FALSE);
        if ($this->admin_id) {
            $this->db->where('admin_id', $this->admin_id);
        }
        $this->db->update($this->table2);
        return $this->db->affected_rows();
    }
}
