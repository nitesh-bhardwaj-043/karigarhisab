<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_workers extends CI_Model
{
    private $table;
    private $table2;
    private $table3;
    private $table4;
    private $admin_id;
    function __construct()
    {
        parent::__construct();
        $this->table = "workers";
        $this->table2 = "wallet";
        $this->table3 = "transactions";
        $this->table4 = "admin_profile";
        // determine current admin from session (same id used for scoping)
        $CI =& get_instance();
        $this->admin_id = (int) $CI->session->userdata('admin_id');
    }
    function view_data($where = null, $select = "*")
    {
        $this->db->select($select);
        if ($where) {
            $this->db->where($where);
        }
        if ($this->admin_id) {
            $this->db->where('admin_id', $this->admin_id);
        }
        $this->db->order_by('id', "desc");
        return $this->db->get($this->table);
    }
    function view_detailed_data()
    {
        $admin_id = (int) $this->admin_id;
        // taken: worker -> admin (direction = 2)
        // given: admin -> worker (direction = 1)
        $this->db->select("workers.*, 
        (SELECT COALESCE(SUM(grams), 0) FROM {$this->table3} WHERE worker_id = workers.id AND direction = 2 AND admin_id = {$admin_id}) as taken,
        (SELECT COALESCE(SUM(grams), 0) FROM {$this->table3} WHERE worker_id = workers.id AND direction = 1 AND admin_id = {$admin_id}) as given");
        $this->db->from($this->table . ' as workers');
        if ($admin_id) {
            $this->db->where('workers.admin_id', $admin_id);
        }
        $this->db->order_by('workers.id', "desc");
        return $this->db->get();
    }
    function view_admin()
    {
        $this->db->select("*");
        if ($this->admin_id) {
            $this->db->where('id', $this->admin_id);
        }
        return $this->db->get($this->table4);
    }
    function view_worker($id)
    {
        $this->db->where('id', $id);
        if ($this->admin_id) {
            $this->db->where('admin_id', $this->admin_id);
        }
        return $this->db->get($this->table);
    }
    function add_data($data)
    {
        if ($this->admin_id) {
            $data['admin_id'] = $this->admin_id;
        }
        $a = $this->db->insert($this->table, $data);
        return $this->db->affected_rows($a);
    }
    function update_data($where, $data)
    {
        $this->db->where($where);
        if ($this->admin_id) {
            $this->db->where('admin_id', $this->admin_id);
        }
        $a = $this->db->update($this->table, $data);
        return $this->db->affected_rows($a);
    }
    function delete_data($where)
    {
        $this->db->where($where);
        if ($this->admin_id) {
            $this->db->where('admin_id', $this->admin_id);
        }
        $a = $this->db->delete($this->table);
        return $this->db->affected_rows($a);
    }
}
