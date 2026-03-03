<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_expenses extends CI_Model
{
    private $table;
    private $admin_id;
    function __construct()
    {
        parent::__construct();
        $this->table = "expenses";
        $CI =& get_instance();
        $this->admin_id = (int) $CI->session->userdata('admin_id');
    }
    function view_data($where=null,$select="*")
    {
        $this->db->select($select);
        if($where) {
            $this->db->where($where);
        }
        if ($this->admin_id) {
            $this->db->where('admin_id', $this->admin_id);
        }
        $this->db->order_by('id',"desc");
        return $this->db->get( $this->table);
    }
    function add_data($data)
    {
        if ($this->admin_id) {
            $data['admin_id'] = $this->admin_id;
        }
        $a=$this->db->insert($this->table,$data);
        return $this->db->affected_rows($a);
    }
    function update_data($where,$data)
    {
        $this->db->where($where);
        if ($this->admin_id) {
            $this->db->where('admin_id', $this->admin_id);
        }
        $a=$this->db->update($this->table,$data);
        return $this->db->affected_rows($a);
    }
    function delete_data($where)
    {
        $this->db->where($where);
        if ($this->admin_id) {
            $this->db->where('admin_id', $this->admin_id);
        }
        $a=$this->db->delete($this->table);
        return $this->db->affected_rows($a);
    }
    
}