<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Mdl_products extends CI_Model
{


    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


    // Fetch a bracelet by its b_key
    public function get_bracelet_by_bkey($bkey)
    {
        $this->db->where('b_key', $bkey);
        $q = $this->db->get('bracelet');
        return $q->row_array();
    }

    // Fetch related bracelets (exclude current id), limit default 5
    public function get_related_bracelets($exclude_id = null, $limit = 5)
    {
        if ($exclude_id) {
            $this->db->where('id !=', $exclude_id);
        }
        $this->db->where('status', 1);
        $this->db->order_by('id', 'desc');
        $this->db->limit($limit);
        $q = $this->db->get('bracelet');
        return $q->result_array();
    }
    
    public function get_categories($id)
    {
        $this->db->select("*");
        $this->db->where('i_id', $id);
        $this->db->order_by('price', 'asce');
        $q = $this->db->get('moreitems');
        return $q->result_array();
    }

    // Fetch all bracelets (optionally limited)
    public function get_all_bracelets($limit = null)
    {
        $this->db->where('status', 1);
        $this->db->order_by('id', 'desc');
        if ($limit) {
            $this->db->limit($limit);
        }
        $q = $this->db->get('bracelet');
        return $q->result_array();
    }

    // --- Items (gems) methods ---
    // Fetch a single gem/item by its g_key
    public function get_item_by_gkey($gkey)
    {
        $this->db->where('g_key', $gkey);
        $q = $this->db->get('items');
        return $q->row_array();
    }

    // Fetch items by category ('Precious' or 'Semi-precious')
    public function get_items_by_category($category, $limit = null)
    {
        $this->db->where('category', $category);
        $this->db->where('status', 1);
        $this->db->order_by('id', 'desc');
        if ($limit) {
            $this->db->limit($limit);
        }
        $q = $this->db->get('items');
        return $q->result_array();
    }

    public function get_items_by_birthstone()
    {
        $this->db->where('birthstone !=', 0);
        $this->db->where('status', 1);
        $this->db->order_by('id', 'desc');
        $q = $this->db->get('items');
        return $q->result_array();
    }

    // Fetch related items for a given item: prefer same birthstone if set, otherwise same category.
    public function get_related_items($exclude_id = null, $category = null, $birthstone = null, $limit = 5)
    {
        if ($exclude_id) {
            $this->db->where('id !=', $exclude_id);
        }

        $this->db->where('status', 1);

        if (!empty($birthstone) && (int)$birthstone !== 0) {
            $this->db->where('birthstone', (int)$birthstone);
        } elseif (!empty($category)) {
            $this->db->where('category', $category);
        }

        $this->db->order_by('id', 'desc');
        $this->db->limit($limit);
        $q = $this->db->get('items');
        return $q->result_array();
    }
}
